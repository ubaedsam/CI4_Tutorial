<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UploadModel;

class Upload extends BaseController
{
    protected $UploadModel;

    public function __construct()
    {
        helper('form');
        $this->UploadModel = new UploadModel();
    }

	public function index()
	{
        if(!$this->validate([]))
        {
            $data = [
                'title' => 'Upload Foto',
                'isi' => 'upload/v_upload',
                'validation' => $this->validator,
                'upload' => $this->UploadModel->getData_Upload(),
            ];
    
            echo view('layout/v_wrapper', $data);
        }
	}

    public function simpan()
    {
        if($this->request->getMethod() !=='post'){
            return redirect()->to(base_url('upload/index'));
        }

        // Validasi data gambar yang di upload
        $validated = $this->validate([
            'gambar' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/png,image/gif,image/jpeg]|max_size[gambar, 2000]'
        ]);

        // Mengembalikan ke halaman index
        if($validated == FALSE){
            return $this->index(); // Jika gagal
        }else{
            $file_gambar = $this->request->getFile('gambar');
            $file_gambar->move(ROOTPATH.'folder_upload'); // Tempat penyimpanan data gambar

            $data = [
                'keterangan' => $this->request->getPost('keterangan'),
                'gambar' => $file_gambar->getName(),
            ];

            $this->UploadModel->insert_gambar($data);
		    return redirect()->to(base_url('upload/index'))->with('success','Data berhasil di upload');
        }
    }
}