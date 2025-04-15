<?php

namespace App\Models;

use CodeIgniter\Model;

class MobilModel extends Model
{
    protected $table = 'mobil'; // Sesuaikan dengan nama tabel di database
    protected $primaryKey = 'id_mobil';
    protected $allowedFields = ['nama_mobil', 'harga', 'gambar'];

    public function getMobil()
    {
        return $this->findAll();
    }
}
