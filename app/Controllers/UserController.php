<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();

        return view('user/index', $data);
    }

    public function create()
    {
        return view('user/create');
    }

    public function store()
    {
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'name'     => 'required',
            'email'    => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]',
            'address'  => 'required',
            'phone'    => 'required',
            'role'     => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model = new UserModel();
        $model->save([
            'name'     => $this->request->getVar('name'),
            'email'    => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'address'  => $this->request->getVar('address'),
            'phone'    => $this->request->getVar('phone'),
            'role'     => $this->request->getVar('role')
        ]);

        return redirect()->route('user.index')->with('message', 'Pengguna berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $model = new UserModel();
        $data['user'] = $model->find($id);

        return view('user/edit', $data);
    }

    public function update($id)
    {
        $model = new UserModel();

        $validation =  \Config\Services::validation();
        $validation->setRules([
            'name'     => 'required',
            'email'    => "required|valid_email|is_unique[users.email,id,$id]",
            'password' => 'required|min_length[6]',
            'address'  => 'required',
            'phone'    => 'required',
            'role'     => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model->update($id, [
            'name'     => $this->request->getVar('name'),
            'email'    => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'address'  => $this->request->getVar('address'),
            'phone'    => $this->request->getVar('phone'),
            'role'     => $this->request->getVar('role')
        ]);

        return redirect()->route('user.index')->with('message', 'Pengguna berhasil diperbarui.');
    }

    public function delete($id)
    {
        $model = new UserModel();
        $model->delete($id);

        return redirect()->route('user.index')->with('message', 'Pengguna berhasil dihapus.');
    }
}
