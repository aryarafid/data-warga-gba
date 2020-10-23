<?php

namespace App\Controllers;

use App\Models\data_kk_model;
use App\Models\data_individu_model;
use CodeIgniter\Validation\Validation;

class Data_kk extends BaseController
{
	protected $model_kk;
	protected $model_indv;

	public function __construct()
	{

		$this->model_kk = new data_kk_model();
		$this->model_indv = new data_individu_model();
	}

	public function index() //menampilkan data kk di dashboard kk
	{
		$data_kk = $this->model_kk->findAll();
		$data_idv = $this->model_indv->findAll();

		$data = [
			'title'	=> 'Data Kartu Keluarga GBA ',
			'heading' => 'Data Kartu Keluarga',
			'data_kk' => $data_kk,
			'data_idv' => $data_idv
		];

		// echo view('template/web_frame', $data);
		return view('data_kk/data_kk_dashboard', $data);
	}

	public function detail($no_kk) //menampilkan detail satu kartu keluarga
	{
		$data_kk = $this->model_kk->find($no_kk);
		$data_idv = $this->model_indv->find($no_kk);
		$get_kelg = $this->model_indv->get_keluarga(['no_kk' => $no_kk]);
		$get_kepala = $this->model_indv->get_kepala($no_kk);

		$data = [
			'title'	=> 'Data Detail Kartu Keluarga GBA ',
			'heading' => 'Detail Kartu Keluarga',
			'data_kk' => $data_kk,
			'data_idv' => $data_idv,
			'get_kelg' => $get_kelg,
			'get_kepala' => $get_kepala,
		];

		// echo view('template/web_frame', $data);
		// echo ($get_kepala);
		return view('data_kk/data_kk_detail_2', $data);
	}

	public function tambah_kk()
	{
		$data = [
			'title'	=> 'Data Kartu Keluarga GBA ',
			'heading' => 'Tambah Data Kartu Keluarga',
		];

		return view('data_kk/input_data_kk', $data);
	}

	public function tambah_kk_aksi()
	{
		// $no_kartu_keluarga = $this->request->getVar('no_kartu_keluarga');
		// $nik_kepala_keluarga = $this->request->getVar('nik_kepala_keluarga');
		// $alamat = $this->request->getVar('alamat');
		// $rt = $this->request->getVar('rt');
		// $rw = $this->request->getVar('rw');
		// $desa_kelurahan = $this->request->getVar('desa_kelurahan');
		// $kecamatan = $this->request->getVar('kecamatan');
		// $kabupaten_kota = $this->request->getVar('kabupaten_kota');
		// $kode_pos = $this->request->getVar('kode_pos');
		// $provinsi = $this->request->getVar('provinsi');
		// $tanggal_keluar = $this->request->getVar('tanggal_keluar');

		$data =  array(
			'no_kartu_keluarga' => $this->request->getpost('no_kartu_keluarga'),
			'nik_kepala_keluarga' => $this->request->getpost('nik_kepala_keluarga'),
			'alamat' => $this->request->getpost('alamat'),
			'rt' => $this->request->getpost('rt'),
			'rw' => $this->request->getpost('rw'),
			'desa_kelurahan' => $this->request->getpost('desa_kelurahan'),
			'kecamatan' => $this->request->getpost('kecamatan'),
			'kabupaten_kota' => $this->request->getpost('kabupaten_kota'),
			'kode_pos' => $this->request->getpost('kode_pos'),
			'provinsi' => $this->request->getpost('provinsi'),
			'tanggal_keluar' => $this->request->getpost('tanggal_keluar')
		);

		// var_dump($data);
		$this->model_kk->save_kk($data);
		// return $this->db->table('data_kk')->insert($data);

		// $this->session->set_flashdata('msg', 'Data Telah masuk');
		// echo "<script>alert('Data telah disimpan');window.location = '" . base_url() . 'data_kk' . "';</script>";
		echo "<script>alert('Data berhasil ditambahkan');window.location = '" . base_url() . '/data_kk' . "';</script>";
		// return redirect()->to(base_url() . '/data_kk');
	}

	public function edit_kk($no_kk)
	{
		$data_kk = $this->model_kk->find($no_kk);
		$data_idv = $this->model_indv->find($no_kk);
		$get_kelg = $this->model_indv->get_keluarga(['no_kk' => $no_kk]);
		$get_kepala = $this->model_indv->get_kepala($no_kk);

		$data = [
			'title'	=> 'Edit Data Kartu Keluarga GBA ',
			'heading' => 'Edit Kartu Keluarga',
			'data_kk' => $data_kk,
			'data_idv' => $data_idv,
			'get_kelg' => $get_kelg,
			'get_kepala' => $get_kepala,
		];

		// echo view('template/web_frame', $data);
		// echo ($get_kepala);
		return view('data_kk/edit_data_kk', $data);
	}

	public function edit_kk_aksi()
	{
		$data =  array(
			'no_kartu_keluarga' => $this->request->getpost('no_kartu_keluarga'),
			'nik_kepala_keluarga' => $this->request->getpost('nik_kepala_keluarga'),
			'alamat' => $this->request->getpost('alamat'),
			'rt' => $this->request->getpost('rt'),
			'rw' => $this->request->getpost('rw'),
			'desa_kelurahan' => $this->request->getpost('desa_kelurahan'),
			'kecamatan' => $this->request->getpost('kecamatan'),
			'kabupaten_kota' => $this->request->getpost('kabupaten_kota'),
			'kode_pos' => $this->request->getpost('kode_pos'),
			'provinsi' => $this->request->getpost('provinsi'),
			'tanggal_keluar' => $this->request->getpost('tanggal_keluar')
		);

		$no_kartu_keluarga = $this->request->getpost('no_kartu_keluarga');
		// var_dump($data);
		$this->model_kk->update_kk($data, $no_kartu_keluarga);
		// return $this->db->table('data_kk')->insert($data);

		// $this->session->set_flashdata('msg', 'Data Telah masuk');
		echo "<script>alert('Data berhasil diedit');window.location = '" . base_url() . '/data_kk' . "';</script>";
		// return redirect()->to(base_url() . '/data_kk');

	}

	public function hapus_kk($no_kk)
	{
		// $no_kk = $this->request->getpost('no_kartu_keluarga');
		// var_dump($no_kk);
		$this->model_kk->delete_kk($no_kk);
		// return redirect()->to(base_url() . '/data_kk');
		echo "<script>alert('Data berhasil dihapus');window.location = '" . base_url() . '/data_kk' . "';</script>";
	}
}
