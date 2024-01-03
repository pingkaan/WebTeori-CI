<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        // return view login
        // header title Login
        return view('auth/login');
    }

    public function register()
    {
        // Your register logic here
        // header title register
        return view('auth/register');
    }

    public function addUser()
    {
        $data = [];
        helper(['form']);

        // validate using validaterules in model
        $model = new \App\Models\UsersModel();

        if ($this->validate($model->getValidationRules())) {
            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];
            $model->save($data);
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            return view('auth/register', $data);
        }
    }

    public function auth()
    {
        // login validation
        $model = new \App\Models\UsersModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data->password;
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id' => $data->id,
                    'name' => $data->name,
                    'email' => $data->email,
                    'logged_in' => TRUE,
                ];
                session()->set($ses_data);
                return redirect()->to('/');
            } else {
                $data['validation'] = 'Invalid Password';
                return view('auth/login', $data);
            }
        } else {
            $data['validation'] = 'Invalid Email';
            return view('auth/login', $data);
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
