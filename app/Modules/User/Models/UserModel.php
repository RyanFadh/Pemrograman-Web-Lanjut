<?php namespace App\Modules\User\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model{
    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $allowedFields = ['username','email','password','role'];
}