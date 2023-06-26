<?php namespace App\Models;
use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    // Mengambil semua data mahasiswa
    public function getData_Mahasiswa()
    {
        return $this->db->table('tbl_mahasiswa')
        ->join('tbl_fakultas', 'tbl_fakultas.id_fakultas = tbl_mahasiswa.id_fakultas')
        ->join('tbl_jurusan', 'tbl_jurusan.id_jurusan = tbl_mahasiswa.id_jurusan')
        ->get()->getResultArray();
    }
}