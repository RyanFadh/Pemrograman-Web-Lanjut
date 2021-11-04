<?php namespace App\Modules\User\Models;

use CodeIgniter\Model;

class ModelPemain extends Model{

    protected $table = 'pemain';
    protected $primaryKey = 'id_pemain';
    protected $allowedFields = ['id_pemain', 'nama', 'posisi', 'id_negara'];

    public function getData()
    {
        return $this
            ->join('negara', 'negara.id_negara=pemain.id_negara');
    }
}