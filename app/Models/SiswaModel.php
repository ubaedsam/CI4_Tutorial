<?php namespace App\Models;
use CodeIgniter\Model;

class SiswaModel extends Model
{
    // Mengambil semua data siswa
    // public function getData_Siswa()
    // {
    //     return $this->db->table('tbl_siswa')->get()->getResultArray();
    // }

    // Menambah data siswa
    public function insert_siswa($data)
    {
        return $this->db->table('tbl_siswa')->insert($data);
    }
}