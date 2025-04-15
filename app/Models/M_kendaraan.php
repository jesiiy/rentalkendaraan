<?php

namespace App\Models;
use CodeIgniter\Model;

class M_kendaraan extends Model
{
protected $table = 'kendaraan'; // Make sure this is the correct table name
    protected $primaryKey = 'id_kendaraan'; // Ensure this is the correct primary key field
    protected $allowedFields = ['status'];

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

}


