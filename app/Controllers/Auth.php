<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
    }
    
    public function index()
    {
        $data = [
            'title' => 'Login',
            'isi'   => 'v_login'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function cek_login() 
    {
        $level = $this->request->getPost('level');

        if($level == 1){
            echo 'Admin';
        }else if($level == 2){
            echo 'Mahasiswa';
        }elseif ($level == 3) {
            echo 'Dosen';
        }
    }
}