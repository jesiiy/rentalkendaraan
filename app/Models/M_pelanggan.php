<?php

namespace App\Models;
use CodeIgniter\Model;

class M_pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'id_pelanggan';
    protected $allowedFields = ['id_user', 'nama_pelanggan', 'jenis_kelamin', 'nik', 'no_hp', 'alamat', 'no_sim'];
}
