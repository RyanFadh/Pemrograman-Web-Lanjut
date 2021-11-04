<?php namespace App\Modules\Admin\Controllers;

use App\Controllers\BaseController;
use App\Modules\Admin\Models\ModelManajemen;
use App\Modules\Admin\Models\ModelNegara;
use App\Modules\Admin\Models\ModelPemain;
use App\Modules\Admin\Models\ModelSponsor;
use App\Modules\Admin\Models\UserModel;

class Arsenal extends BaseController
{

    public function index()
    {
        $session = session();
        $db = \Config\Database::connect();
        return view('App\Modules\Admin\Views\Beranda');
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

        return view('App\Modules\Admin\Views\ViewManajemen', $data);
    }

    public function indexPemain()
    {
        $data = [
            'pemain' => $this->pemainModel->getData()->paginate(6, 'bootstrap'),
            'pager' => $this->pemainModel->pager
        ];

        return view('App\Modules\Admin\Views\ViewPemain', $data);
    }

    public function indexSponsor()
    {
        $data = [
            'sponsor' => $this->sponsorModel->paginate(6, 'bootstrap'),
            'pager' => $this->sponsorModel->pager
        ];

        return view('App\Modules\Admin\Views\ViewSponsor', $data);
    }

    public function indexPengguna()
    {
        $data = [
            'pengguna' => $this->userModel->paginate(6, 'bootstrap'),
            'pager' => $this->userModel->pager
        ];

        return view('App\Modules\Admin\Views\ViewPengguna', $data);
    }

    public function buatManajemen()
    {
        helper(['form', 'url']);

        $negaraModel = new ModelNegara();

        $data = [
            'id_negara' => $this->request->getPost('id_negara'),
            'nama_negara' => $this->request->getPost('nama_negara'),
            'validation' => \Config\Services::validation()
        ];

        $data["negara"] = $negaraModel->findAll();
        return view('App\Modules\Admin\Views\buatManajemen', $data);
    }

    public function simpanManajemen()
    {
        helper(['form', 'url']);

        if (!$this->validate([
            'id_manajemen' => [
                'rules' => 'required|max_length[11]|is_unique[manajemen.id_manajemen]',
                'errors' => [
                    'required' => 'Mohon Isi ID Manajemen',
                    'max_length' => 'ID Melebihi Kapasitas',
                    'is_unique' => 'ID Tidak Boleh Sama'
                ]
            ],
            'nama' => [
                'rules' => 'required|max_length[100]',
                'errors' => [
                    'required' => 'Mohon Isi Nama Manajemen',
                    'max_length' => 'Nama Manajemen Melebihi Kapasitas'
                ]
            ],
            'jabatan' => [
                'rules' => 'required|max_length[100]',
                'errors' => [
                    'required' => 'Mohon Isi Jabatan Manajemen',
                    'max_length' => 'Jabatan Manajemen Melebihi Kapasitas'
                ]
            ],
            'id_negara' => [
                'rules' => 'required|is_natural',
                'errors' => [
                    'required' => 'Mohon Pilih Negara',
                    'is_natural' => 'Mohon Pilih Negara'
                ]
            ],
            'foto' => [
                'rules' => 'ext_in[foto,png,jpg]|max_size[foto,5120]',
                'errors' => [
                    'ext_in' => 'Format Foto JPG/PNG',
                    'max_size' => 'Ukuran Maksimal Foto 5 MB'
                ]
            ],
        ])) {
            return redirect()->to(base_url('Arsenal/buatManajemen'))->withInput();
        }

        $fileFoto = $this->request->getFile('foto');

        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.jpg';
        } else {
            $namaFoto = $fileFoto->getRandomName();
            $path = FCPATH . 'uploads';

            $fileFoto->move($path, $namaFoto);
        }

        $dataSimpan = [
            'id_manajemen' => $this->request->getPost('id_manajemen'),
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),
            'id_negara' => $this->request->getPost('id_negara'),
            'foto' => $namaFoto
        ];

        $this->manajemenModel->insert($dataSimpan);
       
        return redirect()->to(base_url('Arsenal/indexManajemen'));
    }

    public function buatPemain()
    {
        helper(['form', 'url']);

        $negaraModel = new ModelNegara();

        $data = [
            'id_negara' => $this->request->getPost('id_negara'),
            'nama_negara' => $this->request->getPost('nama_negara')
        ];

        $data["negara"] = $negaraModel->findAll();
        return view('App\Modules\Admin\Views\buatPemain', $data);
    }

    public function simpanPemain()
    {
        helper(['form', 'url']);

        $pemainModel = new ModelPemain();

        $dataSimpan = [
            'id_pemain' => $this->request->getPost('id_pemain'),
            'nama' => $this->request->getPost('nama'),
            'posisi' => $this->request->getPost('posisi'),
            'id_negara' => $this->request->getPost('id_negara')
        ];

        $is_valid = \Config\Services::validation()->run($dataSimpan, 'pemain');

        if ($is_valid) {
            $pemainModel->insert($dataSimpan);
        } else {
            session()->setFlashData('error', \Config\Services::validation()->getErrors());

            return redirect()->to(base_url('Arsenal/buatPemain'));
        }
        return redirect()->to(base_url('Arsenal/indexPemain'));
    }

    public function buatSponsor()
    {
        helper(['form', 'url']);

        return view('App\Modules\Admin\Views\buatSponsor');
    }

    public function simpanSponsor()
    {
        helper(['form', 'url']);

        $sponsorModel = new ModelSponsor();

        $dataSimpan = [
            'id_sponsor' => $this->request->getPost('id_sponsor'),
            'nama' => $this->request->getPost('nama'),
            'jenis' => $this->request->getPost('jenis')
        ];

        $is_valid = \Config\Services::validation()->run($dataSimpan, 'sponsor');

        if ($is_valid) {
            $sponsorModel->insert($dataSimpan);
        } else {
            session()->setFlashData('error', \Config\Services::validation()->getErrors());

            return redirect()->to(base_url('Arsenal/buatSponsor'));
        }
        return redirect()->to(base_url('Arsenal/indexSponsor'));
    }

    public function hapusManajemen($id_manajemen)
    {

        $manajemenModel = new ModelManajemen();

        $manajemenModel->delete($id_manajemen);

        return redirect()->to(base_url('Arsenal/indexManajemen'));
    }

    public function hapusPemain($id_pemain)
    {

        $pemainModel = new ModelPemain();

        $pemainModel->delete($id_pemain);

        return redirect()->to(base_url('Arsenal/indexPemain'));
    }

    public function hapusSponsor($id_sponsor)
    {

        $sponsorModel = new ModelSponsor();

        $sponsorModel->delete($id_sponsor);

        return redirect()->to(base_url('Arsenal/indexSponsor'));
    }

    public function hapusPengguna($id_pengguna)
    {

        $userModel = new UserModel();

        $userModel->delete($id_pengguna);

        return redirect()->to(base_url('Arsenal/indexPengguna'));
    }

    public function ubahManajemen($id_manajemen)
    {
        $manajemen = new ModelManajemen();
        $negaraModel = new ModelNegara();

        $data = [
            'manajemen' => $manajemen->find($id_manajemen),
            'negara' => $negaraModel->findAll()
        ];

        if (!$data['manajemen']) return redirect()->to(base_url('Arsenal/indexManajemen'));

        return view('App\Modules\Admin\Views\editManajemen', $data);
    }

    public function editManajemen($id_manajemen)
    {
        $manajemen = new ModelManajemen();

        $isiManajemen = $manajemen->find($id_manajemen);

        if (!$isiManajemen) return redirect()->to(base_url('Arsenal/indexManajemen'));

        $manajemen->update($id_manajemen, [
            'id_manajemen' => $this->request->getPost('id_manajemen'),
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),
            'id_negara' => $this->request->getPost('id_negara')
        ]);

        return redirect()->to(base_url('Arsenal/indexManajemen'));
    }

    public function ubahPemain($id_pemain)
    {
        $pemain = new ModelPemain();
        $negaraModel = new ModelNegara();

        $data = [
            'pemain' => $pemain->find($id_pemain),
            'negara' => $negaraModel->findAll()
        ];

        if (!$data['pemain']) return redirect()->to(base_url('Arsenal/indexPemain'));

        return view('App\Modules\Admin\Views\editPemain', $data);
    }

    public function editPemain($id_pemain)
    {
        $pemain = new ModelPemain();

        $isiPemain = $pemain->find($id_pemain);

        if (!$isiPemain) return redirect()->to(base_url('Arsenal/indexPemain'));

        $pemain->update($id_pemain, [
            'id_pemain' => $this->request->getPost('id_pemain'),
            'nama' => $this->request->getPost('nama'),
            'posisi' => $this->request->getPost('posisi'),
            'id_negara' => $this->request->getPost('id_negara')
        ]);

        return redirect()->to(base_url('Arsenal/indexPemain'));
    }

    public function ubahSponsor($id_sponsor)
    {
        $sponsor = new ModelSponsor();

        $data['sponsor'] = $sponsor->find($id_sponsor);

        if (!$data['sponsor']) return redirect()->to(base_url('Arsenal/indexSponsor'));

        return view('App\Modules\Admin\Views\editSponsor', $data);
    }

    public function editSponsor($id_sponsor)
    {
        $sponsor = new ModelSponsor();

        $isiSponsor = $sponsor->find($id_sponsor);

        if (!$isiSponsor) return redirect()->to(base_url('Arsenal/indexSponsor'));

        $sponsor->update($id_sponsor, [
            'id_sponsor' => $this->request->getPost('id_sponsor'),
            'nama' => $this->request->getPost('nama'),
            'jenis' => $this->request->getPost('jenis')
        ]);

        return redirect()->to(base_url('Arsenal/indexSponsor'));
    }

    public function ubahPengguna($id_pengguna)
    {
        $userModel = new UserModel();

        $data['pengguna'] = $userModel->find($id_pengguna);

        if (!$data['pengguna']) return redirect()->to(base_url('Arsenal/indexPengguna'));

        return view('App\Modules\Admin\Views\editPengguna', $data);
    }

    public function editPengguna($id_pengguna)
    {
        $userModel = new UserModel();

        $isiPengguna = $userModel->find($id_pengguna);

        if (!$isiPengguna) return redirect()->to(base_url('Arsenal/indexPengguna'));

        $userModel->update($id_pengguna, [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'role' => $this->request->getPost('role'),
            'password' => md5($this->request->getPost('password'))
        ]);

        return redirect()->to(base_url('Arsenal/indexPengguna'));
    }
}