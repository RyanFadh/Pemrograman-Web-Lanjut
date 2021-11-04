<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelNegara extends Model
{
    protected $table = 'negara';
    protected $primaryKey = 'id_negara';
    protected $allowedFields = ['nama_negara'];
}
