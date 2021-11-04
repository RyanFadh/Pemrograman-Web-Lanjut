<?php namespace App\Modules\Auth\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        return view('App\Modules\Auth\Views\ViewLogin');
    } 
 
    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $role = $this->request->getVar('role');

        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = md5($password)==$pass;
            if($verify_pass){
                $ses_data = [
                    'id_pengguna'       => $data['id_pengguna'],
                    'username'     => $data['username'],
                    'email'    => $data['email'],
                    'role' => $data['role'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
            }else{
                $session->setFlashdata('msg', 'Password Salah');
                return redirect()->to('/Login');
            }
        }else{
            $session->setFlashdata('msg', 'Email Tidak Ditemukan');
            return redirect()->to('/Login');
        }
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/Login');
    }
} 