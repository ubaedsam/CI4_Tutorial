<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\BeritaModel;

class Berita extends BaseController
{
    protected $BeritaModel;

    public function __construct()
    {
        $this->BeritaModel = new BeritaModel();
        $pager = \Config\Services::pager(); // library pagination
    }

	public function index()
	{
		$data = [
			'title' => 'Berita',
			'isi' => 'berita/v_berita',
            'berita' => $this->BeritaModel->paginate(6, 'berita'),
            'pager' => $this->BeritaModel->pager,
		];

		echo view('layout/v_wrapper', $data);
	}
}