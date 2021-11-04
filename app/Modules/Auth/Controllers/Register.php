<?php namespace App\Modules\Auth\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Register extends Controller
{
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        return view('App\Modules\Auth\Views\ViewRegister', $data);
    }
 
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'username'      => 'required|min_length[3]|max_length[100]',
            'email'         => 'required|min_length[6]|max_length[100]|valid_email|is_unique[pengguna.email]',
            'password'      => 'required|min_length[6]|max_length[100]',
            'confpassword'  => 'matches[password]'
        ];
         
        if($this->validate($rules)){
            $data = [
                'username' => $this->request->getVar('username'),
                'email'    => $this->request->getVar('email'),
                'password' => md5($this->request->getVar('password')),
                'role'    => 'user',
            ];
            $this->userModel->save($data);
            return redirect()->to(base_url('Login'));
        }else{
            $data['validation'] = $this->validator;
            return view('arsenal/ViewRegister', $data);
        }
         
    }
 
}