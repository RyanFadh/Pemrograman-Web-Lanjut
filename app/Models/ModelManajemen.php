<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelManajemen extends Model
{

    protected $table = 'manajemen';
    protected $primaryKey = 'id_manajemen';
    protected $allowedFields = ['id_manajemen', 'nama', 'jabatan', 'id_negara', 'foto'];

    public function getData()
    {
        return $this
            ->join('negara', 'negara.id_negara=manajemen.id_negara');
    }
}
