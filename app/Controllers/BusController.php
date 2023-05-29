<?php

namespace App\Controllers;

use App\Models\BusModel;
use CodeIgniter\Controller;

class BusController extends Controller
{
    public function index()
    {
        $model = new BusModel();
        $data['buses'] = $model->findAll();

        return view('bus/index', $data);
    }

    public function create()
    {
        return view('bus/create');
    }

    public function store()
    {
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'bus_name'    => 'required',
            'bus_type'    => 'required',
            'total_seats' => 'required|integer',
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
            // tambahkan aturan validasi lainnya sesuai kebutuhan
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model->update($id, [
            'bus_name'    => $this->request->getVar('bus_name'),
            'bus_type'    => $this->request->getVar('bus_type'),
            'total_seats' => $this->request->getVar('total_seats'),
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
