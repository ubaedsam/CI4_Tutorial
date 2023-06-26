<?php namespace App\Models;
use CodeIgniter\Model;

class UploadModel extends Model
{
    // Mengambil semua data upload
    public function getData_Upload()
    {
        return $this->db->table('tbl_upload')->get()->getResultArray();
    }

    // Menambah data upload
    public function insert_gambar($data)
    {
        return $this->db->table('tbl_upload')->insert($data);
    }
}