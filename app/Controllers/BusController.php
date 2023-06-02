<?php

namespace App\Controllers;

use App\Models\BusModel;
use App\Models\BookingModel;
use CodeIgniter\Controller;

class BusController extends Controller
{
    public function index()
    {
        $model = new BusModel();
        $data['buses'] = $model->findAll();

        return view('bus/index', $data);
    }

    public function list()
    {
        $model = new BusModel();
        $data['buses'] = $model->findAll();

        return view('bus/list', $data);
    }

    public function create()
    {
        // Check if user is admin
        if (session()->get('role') !== 'admin') {
            return redirect()->route('bus.index');
        }
        // Rest of your code
        return view('bus/create');
    }

    public function store()
    {
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'bus_name'    => 'required',
            'bus_type'    => 'required',
            'total_seats' => 'required|integer',
            'price'      => 'required|integer',
            'departure_location' => 'required',
            'arrival_location' => 'required',
            'departure_time' => 'required',
            'arrival_time' => 'required',
            'distance' => 'required|integer',
            // tambahkan aturan validasi lainnya sesuai kebutuhan
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model = new BusModel();
        $model->save([
            'bus_name'    => $this->request->getVar('bus_name'),
            'bus_type'    => $this->request->getVar('bus_type'),
            'total_seats' => $this->request->getVar('total_seats'),
            'price'      => $this->request->getVar('price'),
            'departure_location' => $this->request->getVar('departure_location'),
            'arrival_location' => $this->request->getVar('arrival_location'),
            'departure_time' => $this->request->getVar('departure_time'),
            'arrival_time' => $this->request->getVar('arrival_time'),
            'distance' => $this->request->getVar('distance'),
            // tambahkan field dan data lainnya sesuai kebutuhan
        ]);

        return redirect()->route('bus.index')->with('message', 'Bus berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $model = new BusModel();
        $data['bus'] = $model->find($id);

        return view('bus/edit', $data);
    }

    public function update($id)
    {
        $model = new BusModel();

        $validation =  \Config\Services::validation();
        $validation->setRules([
            'bus_name'    => 'required',
            'bus_type'    => 'required',
            'total_seats' => 'required|integer',
            'price'      => 'required|integer',
            'departure_location' => 'required',
            'arrival_location' => 'required',
            'departure_time' => 'required',
            'arrival_time' => 'required',
            'distance' => 'required|integer',
            // tambahkan aturan validasi lainnya sesuai kebutuhan
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model->update($id, [
            'bus_name'    => $this->request->getVar('bus_name'),
            'bus_type'    => $this->request->getVar('bus_type'),
            'total_seats' => $this->request->getVar('total_seats'),
            'price'      => $this->request->getVar('price'),
            'departure_location' => $this->request->getVar('departure_location'),
            'arrival_location' => $this->request->getVar('arrival_location'),
            'departure_time' => $this->request->getVar('departure_time'),
            'arrival_time' => $this->request->getVar('arrival_time'),
            'distance' => $this->request->getVar('distance'),
            // tambahkan field dan data lainnya sesuai kebutuhan
        ]);

        return redirect()->route('bus.index')->with('message', 'Bus berhasil diperbarui.');
    }

    public function delete($id)
    {
        $model = new BusModel();
        $model->delete($id);

        return redirect()->route('bus.index')->with('message', 'Bus berhasil dihapus.');
    }
}
