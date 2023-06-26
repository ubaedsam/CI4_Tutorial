<?php namespace App\Models;
use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'tbl_berita';
    
    // Mengambil semua data berita
    // public function getData_berita()
    // {
    //     return $this->db->table('berita')->get()->getResultArray();
    // }
}