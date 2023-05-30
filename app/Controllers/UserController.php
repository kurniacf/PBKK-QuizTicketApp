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

    public function login()
    {
        $model = new UserModel();
        $login = $this->request->getVar('login');
        if ($login) {
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');

            $dataEmail = $model->where('email', $email)->first();

            if (!$dataEmail || !password_verify($password, $dataEmail['password'])) {
                $err = "Email atau Password salah";
                echo $err;
            } else {
                echo "Login Berhasil";
                $session = session();
                $session->set('name', $dataEmail['name']);
                $session->set('role', $dataEmail['role']);
                return redirect()->route('landing');
            }
        }

        return view('user/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->route('landing');
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
            'password' => $this->request->getVar('password'),
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

    public function profile()
    {
        // Cek apakah pengguna sudah login. Jika belum, arahkan ke halaman login.
        if (!session()->get('name')) {
            return redirect()->route('user.login');
        }

        // Dapatkan informasi pengguna dari database berdasarkan nama pengguna yang disimpan dalam sesi.
        $model = new UserModel();
        $user = $model->where('name', session()->get('name'))->first();

        // Jika tidak ada pengguna dengan nama tersebut, arahkan ke halaman login.
        if (!$user) {
            return redirect()->route('user.login');
        }

        // Jika pengguna ditemukan, tampilkan halaman profil dengan data pengguna.
        return view('user/profile', ['user' => $user]);
    }
}
