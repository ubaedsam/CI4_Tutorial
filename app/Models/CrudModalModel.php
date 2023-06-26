<?php namespace App\Models;
use CodeIgniter\Model;

class CrudModalModel extends Model
{
    public function get_all_data()
    {
        return $this->db->table('tbl_barang')->get()->getResultArray();
    }

    public function add_data($data)
    {
        return $this->db->table('tbl_barang')->insert($data);
    }

    public function edit_data($data, $id_barang)
    {
        return $this->db->table('tbl_barang')->update($data, array('id_barang' => $id_barang));
    }

    public function delete_data($id_barang)
    {
        return $this->db->table('tbl_barang')->delete(array('id_barang' => $id_barang));
    }

    // Mengambil satu data barang
    public function singlepdf($id_barang)
    {
        return $this->db->table('tbl_barang')->where('id_barang', $id_barang)->get()->getRowArray();
    }

    public function cek_data($nama_barang)
    {
        return $this->db->table('tbl_barang')->where('nama_barang',$nama_barang)->get()->getRowArray();
    }

    public function importexcel($data)
    {
        $this->db->table('tbl_barang')->insert($data);
    }
}