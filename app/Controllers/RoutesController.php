<?php

namespace App\Controllers;

use App\Models\RouteModel;
use CodeIgniter\Controller;

class RoutesController extends Controller
{
    public function index()
    {
        $routemodel = new RouteModel();
        $data['routes'] = $routemodel->findAll();

        return view('routes/index', $data);
    }

    public function create()
    {
        return view('routes/create');
    }

    public function store()
    {
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'start_location'     => 'required',
            'end_location'    => 'required',
            'distance' => 'required',
            'travel_time'  => 'required',
            'fare'    => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model = new RouteModel();
        $model->save([
            'start_location'     => $this->request->getVar('start_location'),
            'end_location'    => $this->request->getVar('end_location'),
            'distance' => $this->request->getVar('distance'),
            'travel_time'  => $this->request->getVar('travel_time'),
            'fare'    => $this->request->getVar('fare'),
        ]);

        return redirect()->route('routes.index')->with('message', 'Rute berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $model = new RouteModel();
        $data['routes'] = $model->find($id);

        return view('routes/edit', $data);
    }

    public function update($id)
    {
        $model = new RouteModel();

        $validation =  \Config\Services::validation();
        $validation->setRules([
            'start_location'     => 'required',
            'end_location'    => 'required',
            'distance' => 'required',
            'travel_time'  => 'required',
            'fare'    => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model->update($id, [
            'start_location'     => $this->request->getVar('start_location'),
            'end_location'    => $this->request->getVar('end_location'),
            'distance' => $this->request->getVar('distance'),
            'travel_time'  => $this->request->getVar('travel_time'),
            'fare'    => $this->request->getVar('fare'),
        ]);

        return redirect()->route('routes.index')->with('message', 'Rute berhasil diperbarui.');
    }

    public function delete($id)
    {
        $model = new RouteModel();
        $model->delete($id);

        return redirect()->route('routes.index')->with('message', 'Rute berhasil dihapus.');
    }
}
