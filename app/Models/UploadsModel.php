<?php namespace App\Models;
use CodeIgniter\Model;

class UploadsModel extends Model
{
    // Menambah data uploads
    public function insert_uploads($data)
    {
        return $this->db->table('tbl_uploads')->insert($data);
    }

    // Menambah data galeries
    public function insert_galeries($data)
    {
        return $this->db->table('tbl_galeries')->insert($data);
    }
}