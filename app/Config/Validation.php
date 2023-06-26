<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	// Validasi Input Data Siswa
	public $siswa = [
		'nis' => 'required|is_unique[tbl_siswa.nis]|min_length[4]',
		'nama'=> 'required|max_length[20]',
		'email'=> 'required|valid_email',
		'foto_siswa'=> 'uploaded[foto_siswa]|mime_in[foto_siswa,image/jpg,image/jpeg,image/png,image/gif]|max_size[foto_siswa,1000]',
	];

	public $siswa_errors = [
		'nis' => [
			'required' => 'Nomor nis wajib di isi dan tidak boleh kosong.',
			'is_unique' => 'Nomor nis sudah ada, silahkan input nomor nis lain.',
			'min_length' => 'Nomor nis minimal 4 karakter',
		],
		'nama' => [
			'required' => 'Nama wajib di isi dan tidak boleh kosong.',
			'max_length' => 'Nama maksimal 20 karakter',
		],
		'email' => [
			'required' => 'Email wajib di isi dan tidak boleh kosong.',
			'valid_email' => 'Email yang anda input tidak valid'
		],
		'foto_siswa' => [
			'uploaded' => 'Foto siswa wajib di isi dan tidak boleh kosong.',
			'mime_in' => 'Foto yang di upload wajib ber format jpg,jpeg,png dan gif',
			'max_size' => 'Foto yang di upload maksimal dengan size 1 MB'
		]
	];
}
