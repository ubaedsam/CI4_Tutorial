<?php namespace App\Models;
use CodeIgniter\Model;

class BarangModel extends Model
{
    // Restfull API

    protected $table = 'tbl_barang';

    // Mengambil semua data dan satu data
    public function get_Barang($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_barang'=>$id])->getRowArray();
        }
    }

    // Menambah data
    public function add_Barang($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    // Mengubah satu data
    public function update_Barang($data, $id)
    {
        return $this->db->table($this->table)->update($data,['id_barang'=>$id]);
    }

    // Menghapus satu data
    public function delete_Barang($id)
    {
        return $this->db->table($this->table)->delete(['id_barang' => $id]);
    }
}