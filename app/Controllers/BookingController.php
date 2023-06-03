<?php

namespace App\Controllers;

use App\Models\BookingModel;
use CodeIgniter\Controller;

class BookingController extends Controller
{
    public function index()
    {
        $model = new BookingModel();
        $data['bookings'] = $model->findAll();

        return view('booking/index', $data);
    }

    public function list()
    {
        $model = new BookingModel();
        $data['bookings'] = $model->findAll();

        return view('booking/list', $data);
    }

    public function create($bus_id)
    {
        // Check if user is logged in
        if (!session()->get('name')) {
            return redirect()->route('user.login');
        }

        return view('booking/create', ['bus_id' => $bus_id]);
    }

    public function store()
    {
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'bus_id' => 'required',
            'seat_number' => 'required|integer',
            // add additional validation rules as needed
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model = new BookingModel();
        $model->save([
            'user_id' => session()->get('id'), // Assuming user's ID is stored in session
            'bus_id' => $this->request->getVar('bus_id'),
            'seat_number' => $this->request->getVar('seat_number'),
            'status' => 'booked',
        ]);

        return redirect()->route('booking.index')->with('message', 'Pemesanan berhasil dibuat.');
    }

    public function cancel($id)
    {
        $model = new BookingModel();
        $booking = $model->find($id);

        // Check if user is allowed to cancel the booking
        if (session()->get('id') !== $booking['user_id']) {
            return redirect()->route('booking.index');
        }

        $booking['status'] = 'cancelled';
        $model->update($id, $booking);

        return redirect()->route('booking.index')->with('message', 'Pemesanan berhasil dibatalkan.');
    }

    public function edit($id)
    {
        // Check if user is admin
        if (session()->get('role') !== 'admin') {
            return redirect()->route('booking.index');
        }

        $model = new BookingModel();
        $data['booking'] = $model->find($id);

        return view('booking/edit', $data);
    }

    public function delete($id)
    {
        // Check if user is admin
        if (session()->get('role') !== 'admin') {
            return redirect()->route('booking.index');
        }

        $model = new BookingModel();
        $model->delete($id);

        return redirect()->route('booking.index')->with('message', 'Pemesanan berhasil dihapus.');
    }
}
