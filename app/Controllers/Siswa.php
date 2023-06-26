<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\SiswaModel;

class Siswa extends BaseController
{
    protected $SiswaModel;

    public function __construct()
    {
        helper('form');
        $this->SiswaModel = new SiswaModel();
    }

	public function index()
	{
        if(!$this->validate([]))
        {
            $data = [
                'title' => 'Validasi Data Siswa',
                'isi' => 'siswa/v_siswa'
            ];
    
            echo view('layout/v_wrapper', $data);
        }
	}

    public function simpan()
    {
        $validation = \Config\Services::validation();

        // Mengambil file upload
        $image = $this->request->getFile('foto_siswa');
        // Random nama file yang di upload
        $name = $image->getRandomName();

        $data = [
            'nis' => $this->request->getPost('nis'),
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'foto_siswa' => $name,
        ];

        if ($validation->run($data, 'siswa') == false) {
            session()->setFlashdata('inputs',$this->request->getPost());
            session()->setFlashdata('errors',$validation->getErrors());
            return redirect()->to(base_url('siswa/index'));
        }else{
            $image->move(ROOTPATH.'foto_siswa', $name);
            $this->SiswaModel->insert_siswa($data);
            session()->setFlashdata('success', 'Data siswa berhasil ditambahkan');
		    return redirect()->to(base_url('siswa/index'));
        }
    }

    // public function simpan()
    // {
    //     if($this->request->getMethod() !=='post'){
    //         return redirect()->to(base_url('upload/index'));
    //     }

    //     // Validasi data gambar yang di upload
    //     $validated = $this->validate([
    //         'gambar' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/png,image/gif,image/jpeg]|max_size[gambar, 2000]'
    //     ]);

    //     // Mengembalikan ke halaman index
    //     if($validated == FALSE){
    //         return $this->index(); // Jika gagal
    //     }else{
    //         $file_gambar = $this->request->getFile('gambar');
    //         $file_gambar->move(ROOTPATH.'/public/folder_upload'); // Tempat penyimpanan data gambar

    //         $data = [
    //             'keterangan' => $this->request->getPost('keterangan'),
    //             'gambar' => $file_gambar->getName(),
    //         ];

    //         $this->UploadModel->insert_gambar($data);
	// 	    return redirect()->to(base_url('upload/index'))->with('success','Data berhasil di upload');
    //     }
    // }
}