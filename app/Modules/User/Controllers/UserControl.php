<?php namespace App\Modules\User\Controllers;

use App\Controllers\BaseController;
use App\Modules\User\Models\ModelManajemen;
use App\Modules\User\Models\ModelNegara;
use App\Modules\User\Models\ModelPemain;
use App\Modules\User\Models\ModelSponsor;
use App\Modules\User\Models\UserModel;

class UserControl extends BaseController
{
    
    public function index()
    {
        $session = session();
        $db = \Config\Database::connect();
        return view('App\Modules\User\Views\Beranda');
    }

    public function __construct()
    {
        $this->manajemenModel = new ModelManajemen();
        $this->sponsorModel = new ModelSponsor();
        $this->pemainModel = new ModelPemain();
        $this->userModel = new UserModel();
    }

    public function indexManajemen()
    {
        $data = [
            'manajemen' => $this->manajemenModel->getData()->paginate(3, 'bootstrap'),
            'pager' => $this->manajemenModel->pager
        ];

        return view('App\Modules\User\Views\ViewManajemen', $data);
    }

    public function indexPemain()
    {
        $data = [
            'pemain' => $this->pemainModel->getData()->paginate(9, 'bootstrap'),
            'pager' => $this->pemainModel->pager
        ];

        return view('App\Modules\User\Views\ViewPemain', $data);
    }

    public function indexSponsor()
    {
        $data = [
            'sponsor' => $this->sponsorModel->paginate(9, 'bootstrap'),
            'pager' => $this->sponsorModel->pager
        ];

        return view('App\Modules\User\Views\ViewSponsor', $data);
    }
}