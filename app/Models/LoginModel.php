<?php namespace App\Models;
use CodeIgniter\Model;

class LoginModel extends Model
{
    // Mengambil semua data user
    public function cek_login($username, $password)
    {
        return $this->db->table('tbl_user')
        ->where(array('username' => $username, 'password' => $password))
        ->get()->getRowArray();
    }
}