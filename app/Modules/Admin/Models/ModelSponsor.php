<?php namespace App\Modules\Admin\Models;

use CodeIgniter\Model;

class ModelSponsor extends Model
{

    protected $table = 'sponsor';
    protected $primaryKey = 'id_sponsor';
    protected $allowedFields = ['id_sponsor', 'nama', 'jenis'];
}
