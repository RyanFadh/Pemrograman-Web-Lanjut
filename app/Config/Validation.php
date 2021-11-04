<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	public $manajemen = [
		'id_manajemen' => 'required|max_length[11]|is_unique[manajemen.id_manajemen]',
		'nama' => 'required|max_length[100]',
		'jabatan' => 'required|max_length[100]',
		'id_negara' => 'is_natural'
    ];

    public $manajemen_errors = [
		'id_manajemen' => [
            'required' => 'Mohon Isi ID Manajemen',
            'max_length' => 'ID Melebihi Kapasitas',
			'is_unique' => 'ID Tidak Boleh Sama'
		],
		'nama' => [
            'required' => 'Mohon Isi Nama Manajemen',
            'max_length' => 'Nama Manajemen Melebihi Kapasitas',
		],
		'jabatan' => [
            'required' => 'Mohon Isi Jabatan Manajemen',
            'max_length' => 'Jabatan Manajemen Melebihi Kapasitas',
		],
        'id_negara' => [
            'is_natural' => 'Mohon Pilih Negara'
		]
    ];

	public $pemain = [
		'id_pemain' => 'required|max_length[11]|is_unique[pemain.id_pemain]',
		'nama' => 'required|max_length[100]',
		'posisi' => 'required|max_length[100]',
		'id_negara' => 'is_natural'
    ];

    public $pemain_errors = [
		'id_pemain' => [
            'required' => 'Mohon Isi ID Pemain',
            'max_length' => 'ID Melebihi Kapasitas',
			'is_unique' => 'ID Tidak Boleh Sama'
		],
		'nama' => [
            'required' => 'Mohon Isi Nama Pemain',
            'max_length' => 'Nama Pemain Melebihi Kapasitas',
		],
		'posisi' => [
            'required' => 'Mohon Isi Posisi Pemain',
            'max_length' => 'Posisi Pemain Melebihi Kapasitas',
		],
        'id_negara' => [
            'is_natural' => 'Mohon Pilih Negara'
		]
    ];

	public $sponsor = [
		'id_sponsor' => 'required|max_length[11]|is_unique[sponsor.id_sponsor]',
		'nama' => 'required|max_length[100]',
		'jenis' => 'required|max_length[100]',
    ];

    public $sponsor_errors = [
		'id_sponsor' => [
            'required' => 'Mohon Isi ID Sponsor',
            'max_length' => 'ID Melebihi Kapasitas',
			'is_unique' => 'ID Tidak Boleh Sama'
		],
		'nama' => [
            'required' => 'Mohon Isi Nama Sponsor',
            'max_length' => 'Nama Sponsor Melebihi Kapasitas',
		],
		'jenis' => [
            'required' => 'Mohon Isi Jenis Sponsor',
            'max_length' => 'Jenis Sponsor Melebihi Kapasitas',
		]
    ];
}
