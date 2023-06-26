<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $MahasiswaModel;

    public function __construct()
    {
        $this->MahasiswaModel = new MahasiswaModel();
    }

	public function index()
	{
		$data = [
			'title' => 'Mahasiswa',
			'isi' => 'mahasiswa/v_mahasiswa',
            'mahasiswa' => $this->MahasiswaModel->getData_Mahasiswa(),
		];

		echo view('layout/v_wrapper', $data);
	}
}