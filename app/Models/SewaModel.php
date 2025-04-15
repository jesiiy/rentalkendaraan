<?php

namespace App\Models;

use CodeIgniter\Model;

class SewaModel extends Model
{
    protected $table = 'sewa'; // Nama tabel di database
    protected $primaryKey = 'id_sewa'; // Primary key tabel
    protected $allowedFields = ['id_pelanggan', 'nama_pelanggan', 'id_mobil', 'nama_mobil', 'harga_sewa', 'tgl_pinjam', 'tgl_kembali', 'total_harga'];

    // Ambil semua data sewa
    public function getAllSewa()
    {
        return $this->findAll();
    }

    // Ambil data sewa berdasarkan ID
    public function getSewaById($id)
    {
        return $this->where(['id_sewa' => $id])->first();
    }

    // Simpan data sewa baru
    public function createSewa($data)
    {
        return $this->insert($data);
    }

    // Update data sewa
    public function updateSewa($id, $data)
    {
        return $this->update($id, $data);
    }

    // Hapus data sewa
    public function deleteSewa($id)
    {
        return $this->delete($id);
    }
}
