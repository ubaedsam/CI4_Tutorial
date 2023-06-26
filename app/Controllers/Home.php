<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		if(session()->get('username') == ''){
			session()->setFlashdata('gagal','Anda belum login, silahkan login terlebih dahulu');
            return redirect()->to(base_url('login'));
		}
		
		$data = [
			'title' => 'Home',
			'isi' => 'v_home',
		];

		echo view('layout/v_wrapper', $data);
	}

	// public function menu()
	// {
	// 	$data = [
	// 		'title' => 'Menu',
	// 		'isi' => 'v_menu',
	// 	];

	// 	echo view('layout/v_wrapper', $data);
	// }

	// public function menu2()
	// {
	// 	$data = [
	// 		'title' => 'Menu 2',
	// 		'isi' => 'v_menu2',
	// 	];

	// 	echo view('layout/v_wrapper', $data);
	// }

	//--------------------------------------------------------------------

}
