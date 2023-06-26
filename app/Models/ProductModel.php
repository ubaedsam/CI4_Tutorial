<?php namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model
{
    // Mengambil semua data product
    public function getData_Product()
    {
        return $this->db->table('product')->get()->getResultArray();
    }

    // Menambah data product
    public function insert_product($data)
    {
        return $this->db->table('product')->insert($data);
    }

    // Mengambil satu data product
    public function edit_product($product_id)
    {
        return $this->db->table('product')->where('product_id', $product_id)->get()->getRowArray();
    }

    // Mengubah satu data product
    public function update_product($data, $product_id)
    {
        return $this->db->table('product')->update($data, array('product_id' => $product_id));
    }

    // Menghapus satu data product
    public function delete_product($product_id)
    {
        return $this->db->table('product')->delete(array('product_id' => $product_id));
    }
}