<?php namespace App\Models;
use CodeIgniter\Model;

class ChartModel extends Model
{
    // Mengambil semua data chart
    public function getData_Chart()
    {
        return $this->db->table('tbl_penjualan')->get()->getResultArray();
    }
}