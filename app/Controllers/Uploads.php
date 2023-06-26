<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UploadsModel;

class Uploads extends BaseController
{
    protected $UploadsModel;

    public function __construct()
    {
        helper('form');
        $this->UploadsModel = new UploadsModel();
    }

    public function index()
	{
            $data = [
                'title' => 'Upload Multiple Foto',
                'isi' => 'uploads/v_uploads',
            ];
    
            echo view('layout/v_wrapper', $data);
	}

    public function simpan()
    {
        $judul = $this->request->getPost('judul');
        $files = $this->request->getFiles();

        if($files){
            $random = rand(000,999);

            $data_uploads = [
                'id_upload' => $random,
                'judul' => $judul, 
            ];

            $this->UploadsModel->insert_uploads($data_uploads); // menyimpan data ke dalam tabel tbl_uploads

            foreach($files['file_upload'] as $key => $img){
                $data_galeries = [
                    'id_upload' => $random,
                    'gambar' => $img->getRandomName(), 
                ];
                $this->UploadsModel->insert_galeries($data_galeries); // menyimpan data ke dalam tabel tbl_galeries
                $img->move(ROOTPATH.'multiple_uploads', $img->getRandomName()); // Tempat penyimpanan data gambar
            }
            session()->setFlashdata('success', 'File multiple uploads berhasil ditambahkan');
		    return redirect()->to(base_url('uploads/index'));
        }
    }
}