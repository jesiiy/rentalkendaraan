<?php

namespace App\Models;
use CodeIgniter\Model;

class M_belajar extends Model
{
        protected $table = 'sewa'; // Nama tabel di database
    protected $primaryKey = 'id'; // Primary key tabel

    protected $allowedFields = [
        'nama_pelanggan', 'jenis_kelamin', 'ktp', 'sim', 'no_hp',
        'alamat', 'id_kendaraan', 'tanggal_peminjaman', 'total_harga',
        'durasi', 'metode', 'bukti'
    ];
    public function tampil($table, $by){
        return $this->db->table($table)
        ->where('status', 0)
        ->orderby($by, 'desc')
        ->get()
        ->getResult();
    }
    
    public function join($table, $table2, $on){
        return $this->db->table($table)
        ->join($table2,$on)
        ->get()
        ->getResult();
    }
    public function join4($table, $table2,$table3,$table4, $on,$on2,$on3){
        return $this->db->table($table)
        ->join($table2,$on)
        ->join($table3,$on2)
        ->join($table4,$on3)
        ->get()
        ->getResult();
    }
    public function filter($table, $table2, $on ,$filter1, $filter2, $awal, $akhir){
        return $this->db->table($table)
        ->join($table2,$on)
        ->where($filter1,$awal)
        ->where($filter2,$akhir)
        ->get()
        ->getResult();
    }
    public function joinw($table,$table2,$on,$w){
        return $this->db->table($table)
        ->join($table2,$on)
        ->where($w)
        ->get()
        ->getRow();
    }
    public function joinw4($table,$table2,$table3,$table4,$on,$on2,$on3,$w){
        return $this->db->table($table)
        ->join($table2,$on)
        ->join($table3,$on)
        ->join($table4,$on)
        ->where($w)
        ->get()
        ->getRow();
    }

    public function input($table, $data){
        return $this->db->table($table)
        ->insert($data);
    }

    public function hapus($table, $data){
        return $this->db->table($table)
        ->delete($data);
    }
    public function getWhere($table, $where){
        return $this->db->table($table)
        ->getWhere($where)
        ->getRow();
    }

    public function edit($table, $data, $where)
    {
        return $this->db->table($table)
        ->update($data, $where);
    }

    public function registerUserDanPelanggan($userData, $pelangganData)
    {
    $this->db->transStart(); // Mulai transaksi

    // Insert ke tabel user
    $this->db->table('user')->insert($userData);
    $id_user = $this->db->insertID(); // Ambil ID user yang baru dibuat

    if (!$id_user) {
        $this->db->transRollback(); // Batalkan transaksi jika gagal
        return false;
    }

    // Tambahkan id_user ke pelanggan
    $pelangganData['id_user'] = $id_user;
    $this->db->table('pelanggan')->insert($pelangganData);

    if ($this->db->affectedRows() <= 0) {
        $this->db->transRollback();
        return false;
    }

    $this->db->transComplete(); // Selesaikan transaksi

    return $this->db->transStatus(); // Kembalikan status transaksi
}

   public function softDelete($id)
{
    // Try to find the vehicle record by ID
    $kendaraan = $this->find($id);
    
    // Check if the record exists
    if ($kendaraan) {
        // If found, update the status
        return $this->update($id, ['status' => 1]);
    }

    // If not found, return false
    return false;
}


    public function restore($id)
    {
        return $this->update($id, ['status' => 0]);
    }

    public function getDeletedKendaraan()
    {   
        return $this->db->table('kendaraan')
        ->select('kendaraan.*, kendaraan.status') 
        ->where('kendaraan.status', 1)
        ->get()
        ->getResult();
    }

    public function getKendaraan()
    {   
        return $this->db->table('kendaraan')
        ->select('kendaraan.*, kendaraan.status') 
        ->where('kendaraan.status', 0)
        ->get()
        ->getResult();
    }

}
