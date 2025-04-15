<?php

namespace App\Models;
use CodeIgniter\Model;

class M_user extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['username', 'password', 'level'];

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function registerUserDanPelanggan($userData, $pelangganData)
    {
        $db = \Config\Database::connect();
        $db->transStart(); // Mulai transaksi

        // Insert ke tabel user
        $db->table('user')->insert($userData);
        $id_user = $db->insertID(); // Ambil ID user yang baru dibuat

        if (!$id_user) {
            $db->transRollback(); // Batalkan transaksi jika gagal
            return false;
        }

        // Tambahkan id_user ke pelanggan
        $pelangganData['id_user'] = $id_user;
        $db->table('pelanggan')->insert($pelangganData);

        if ($db->affectedRows() <= 0) {
            $db->transRollback();
            return false;
        }

        $db->transComplete(); // Selesaikan transaksi

        return $db->transStatus(); // Kembalikan status transaksi
    }   
}

