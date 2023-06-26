<?php namespace App\Controllers;
use App\Models\LoginModel;

class Login extends BaseController
{
    protected $LoginModel;

    public function __construct()
    {
        helper('form');
        $this->LoginModel = new LoginModel();
    }

    public function index()
    {
		echo view('v_login');
    }

    public function cek_login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $cek = $this->LoginModel->cek_login($username, $password);

        if(($cek['username']==$username)&&($cek['password']==$password)){
            session()->set('username',$cek['username']);
            session()->set('nama_user',$cek['nama_user']);
            session()->set('level',$cek['level']);
            return redirect()->to(base_url('home'));
        }else{
            // Jika username dan password salah
            session()->setFlashdata('gagal','Username atau password yang anda masukan salah !!!');
            return redirect()->to(base_url('login'));
        }
    }

    public function logout()
    {
        session()->remove('username');
        session()->remove('nama_user');
        session()->remove('level');
        session()->setFlashdata('sukses','Anda berhasil logout !!!');
        return redirect()->to(base_url('login'));
    }
}