<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\BarangModel;
use CodeIgniter\RESTful\ResourceController; // Library Restfull API

class Barang extends ResourceController
{
    // Restfull API
    protected $format = 'json';
    protected $modelName = 'App\Models\BarangModel';

    // Mengambil semua data
    public function index()
    {
        return $this->respond($this->model->findAll(), 200);
    }

    // mengambil satu data
    public function detail($id = null)
    {
        $get = $this->model->get_Barang($id);
        return $this->respond($get, 200);
    }

    // Menambah satu data
    public function add()
    {
        $valid = $this->validate([
            'nama_barang' => [
                'label' => 'Nama Barang',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi dan tidak boleh kosong',
                ]
            ],
            'harga' => [
                'label' => 'Harga',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi dan tidak boleh kosong',
                ]
            ],
            'stock' => [
                'label' => 'Stock',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi dan tidak boleh kosong',
                ]
            ],
        ]);
        if(!$valid){ // jika salah
            $response = [
                'status' => 200,
                'error' => true,
                'data' => \Config\Services::validation()->getErrors(),
            ];
            return $this->respond($response, 500);
        }else{ // jika benar
            $nama_barang = $this->request->getPost('nama_barang');
            $harga = $this->request->getPost('harga');
            $stock = $this->request->getPost('stock');
            $data = [
                'nama_barang' => $nama_barang,
                'harga' => $harga,
                'stock' => $stock,
            ];
            $simpan = $this->model->add_Barang($data);
            if($simpan){
                $msg = ['message' => 'Barang berhasil ditambahkan'];
                $response = [
                    'status' => 200,
                    'error' => false,
                    'data' => $msg,
                ];
                return $this->respond($response, 200);
            }
        }
    }

    // Mengubah satu data
    public function edit($id = null)
    {
        $valid = $this->validate([
            'nama_barang' => [
                'label' => 'Nama Barang',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi dan tidak boleh kosong',
                ]
            ],
            'harga' => [
                'label' => 'Harga',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi dan tidak boleh kosong',
                ]
            ],
            'stock' => [
                'label' => 'Stock',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi dan tidak boleh kosong',
                ]
            ],
        ]);
        if(!$valid){ // jika salah
            $response = [
                'status' => 200,
                'error' => true,
                'data' => \Config\Services::validation()->getErrors(),
            ];
            return $this->respond($response, 500);
        }else{ // jika benar
            $nama_barang = $this->request->getPost('nama_barang');
            $harga = $this->request->getPost('harga');
            $stock = $this->request->getPost('stock');
            $data = [
                'nama_barang' => $nama_barang,
                'harga' => $harga,
                'stock' => $stock,
            ];
            $edit = $this->model->update_Barang($data, $id);
            if($edit){
                $msg = ['message' => 'Barang berhasil diubah'];
                $response = [
                    'status' => 200,
                    'error' => false,
                    'data' => $msg,
                ];
                return $this->respond($response, 200);
            }
        }
    }

    // Menghapus satu data
    public function delete($id = null)
    {
        $this->model->delete_Barang($id);
        $msg = ['message' => 'Data barang berhasil dihapus'];
        $response = [
            'data' => $msg,
        ];
        return $this->respond($response, 200);
    }
}