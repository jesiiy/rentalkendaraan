<?php

namespace App\Models;

use CodeIgniter\Model;

class ActivityLogModel extends Model
{
    protected $table = 'log_activity';
    protected $primaryKey = 'id_log';
    protected $allowedFields = ['id_user', 'keterangan', 'timestamp', 'ip_address'];
    protected $useTimestamps = false; // Kita gunakan waktu manual jika perlu
}