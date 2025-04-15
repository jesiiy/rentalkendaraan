<?php

namespace App\Models;
use CodeIgniter\Model;

class M_pelanggan extends Model
{
    protected $table = 'petugas';
    protected $primaryKey = 'id_petugas';
    protected $allowedFields = ['id_user', 'nama_petugas', 'jenis_kelamin', 'no_hp'];
}
