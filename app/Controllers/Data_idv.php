<?php

namespace App\Controllers;

use App\Models\data_kk_model;
use App\Models\data_individu_model;

class Data_idv extends BaseController
{
	protected $model_kk;
	protected $model_indv;

	public function __construct()
	{
		$this->model_kk = new data_kk_model();
		$this->model_indv = new data_individu_model();
	}

	public function index() //menampilkan data individu di dashboard kk
	{
		$data_kk = $this->model_kk->findAll();
		$data_idv = $this->model_indv->orderBy('nik', 'asc')
			->findAll();

		$data = [
			'title'	=> 'Data Penduduk GBA ',
			'heading' => 'Data Penduduk',
			'data_kk' => $data_kk,
			'data_idv' => $data_idv
		];

		// echo view('template/web_frame', $data);
		echo view('data_idv/data_idv_dashboard', $data);
	}

	public function detail($nik) //menampilkan detail satu data
	{
		$data_kk = $this->model_kk->find($nik);
		$data_idv = $this->model_indv->find($nik);
		// $get_kelg = $this->model_indv->get_keluarga(['nik' => $nik]);
		// $get_kepala = $this->model_indv->get_kepala($nik);

		$data = [
			'title'	=> 'Data Detail Penduduk GBA ',
			'heading' => 'Detail Data Penduduk',
			'data_kk' => $data_kk,
			'data_idv' => $data_idv,
			// 'get_kelg' => $get_kelg,
			// 'get_kepala' => $get_kepala,
		];

		// echo view('template/web_frame', $data);
		// echo ($get_kepala);
		echo view('data_idv/data_idv_detail', $data);
	}


	public function tambah_idv()
	{
		$data = [
			'title'	=> 'Tambah Data Penduduk GBA',
			'heading' => 'Tambah Data Penduduk',
		];

		echo view('data_idv/input_data_idv', $data);
	}

	public function tambah_idv_aksi()
	{
		$data =  array(
			'nik' => $this->request->getPost('nik'),
			'no_kk' => $this->request->getPost('no_kk'),
			'nama_lengkap' => $this->request->getPost('nama_lengkap'),
			'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
			'tempat_lahir' => $this->request->getPost('tempat_lahir'),
			'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
			'agama' => $this->request->getPost('agama'),
			'pendidikan' => $this->request->getPost('pendidikan'),
			'jenis_pekerjaan' => $this->request->getPost('jenis_pekerjaan'),
			'status_perkawinan' => $this->request->getPost('status_perkawinan'),
			'hub_dlm_keluarga' => $this->request->getPost('hub_dlm_keluarga'),
			'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
			'no_paspor' => $this->request->getPost('no_paspor'),
			'no_kitas_kitap' => $this->request->getPost('no_kitas_kitap'),
			'nama_ayah' => $this->request->getPost('nama_ayah'),
			'nama_ibu' => $this->request->getPost('nama_ibu')
		);

		$this->model_indv->save_idv($data);
        echo "<script>alert('Data berhasil ditambahkan');window.location = '".base_url() . '/data_idv'."';</script>";
		// return redirect()->to(base_url() . '/data_idv');
	}

	public function edit_idv($nik)
	{
		$data_kk = $this->model_kk->find($nik);
		$data_idv = $this->model_indv->find($nik);
		// $get_kelg = $this->model_indv->get_keluarga(['no_kk' => $no_kk]);
		// $get_kepala = $this->model_indv->get_kepala($no_kk);

		$data = [
			'title'	=> 'Edit Data Penduduk GBA ',
			'heading' => 'Edit Data Penduduk',
			'data_kk' => $data_kk,
			'data_idv' => $data_idv,
			// 'get_kelg' => $get_kelg,
			// 'get_kepala' => $get_kepala,
		];

		// echo view('template/web_frame', $data);
		// echo ($get_kepala);
		echo view('data_idv/edit_data_idv', $data);
	}

	public function edit_idv_aksi()
	{
		$data =  array(
			'nik' => $this->request->getPost('nik'),
			'no_kk' => $this->request->getPost('no_kk'),
			'nama_lengkap' => $this->request->getPost('nama_lengkap'),
			'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
			'tempat_lahir' => $this->request->getPost('tempat_lahir'),
			'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
			'agama' => $this->request->getPost('agama'),
			'pendidikan' => $this->request->getPost('pendidikan'),
			'jenis_pekerjaan' => $this->request->getPost('jenis_pekerjaan'),
			'status_perkawinan' => $this->request->getPost('status_perkawinan'),
			'hub_dlm_keluarga' => $this->request->getPost('hub_dlm_keluarga'),
			'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
			'no_paspor' => $this->request->getPost('no_paspor'),
			'no_kitas_kitap' => $this->request->getPost('no_kitas_kitap'),
			'nama_ayah' => $this->request->getPost('nama_ayah'),
			'nama_ibu' => $this->request->getPost('nama_ibu')
		);

		$nik = $this->request->getPost('nik');

		$this->model_indv->update_idv($data, $nik);
        echo "<script>alert('Data berhasil diedit');window.location = '".base_url() . '/data_idv'."';</script>";
		// return redirect()->to(base_url() . '/data_idv');
	}

	public function hapus_idv($nik)
	{
		// var_dump($nik);
		$this->model_indv->delete_idv($nik);
        echo "<script>alert('Data berhasil dihapus');window.location = '".base_url() . '/data_idv'."';</script>";
		// return redirect()->to(base_url() . '/data_idv');
	}
}
