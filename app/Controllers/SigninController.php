<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class SigninController extends Controller
{
    public function index()
    {
        helper(['form']);

        $data = [
            "lang" => $this->request->getLocale(),
        ];
        echo view('signin', $data);
    }

    public function loginAuth()
    {
        $session = session();

        $userModel = new UserModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $userModel->where('email', $email)->first();

        $local = $this->request->getLocale();

        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];

                $session->set($ses_data);
                $session->setFlashdata('welcome', lang("Texte.welcome") . ", ". $data['name']);
                return redirect()->to('/'.$local. '/article');

            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/'.$local. '/signin');
            }

        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/'.$local. '/signin');
        }
    }

    public function redirect() {
        $local = $this->request->getLocale();
        return redirect()
            ->to($local . '/signin');

    }
}