<?php

namespace App\Controllers;

//hanya untuk login/set session
use App\Models\auth_model;

class Auth extends BaseController
{
	protected $auth_model;

	public function __construct()
	{
		$this->auth_model = new auth_model();
		$this->form_validation = \Config\Services::validation();
		$this->session = session();
	}

	public function index()
	{
		echo view('login_view');
	}

	public function logger()
	{
		if ($this->request->getPost()) {
			//lakukan validasi untuk data yang di post
			$data = $this->request->getPost();
			// $validate = $this->validation->run($data, 'logcheck');
			$errors = $this->validation->getErrors();

			if ($errors) {
				return view('login_view');
			}

			$auth_model = new \App\Models\auth_model();

			$username = $this->request->getPost('username');
			$password = $this->request->getPost('password');

			$user = $auth_model->where('username', $username)->first();

			if ($user) {
				if ($user['password'] != $password) {
					$this->session->setFlashdata('msg', 'Password Salah');
				} else {
					$sessData = [
						'user_id' => $user['user_id'],
						'username' => $user['username'],
						'masuk' => TRUE
					];

					// var_dump($sessData);

					$this->session->set($sessData);
					echo "<script>alert('Berhsail masuk!');window.location = '" . base_url() . "';</script>";

					return redirect()->to(base_url());
				}
			} else {
				$this->session->setFlashdata('msg', 'User Tidak Ditemukan');
			}
		}
		return view('login_view');
	}

	public function logger2() //DEPRECATED
	{
		if ($this->request->getMethod() == 'POST') {
			$rules = [
				'username' => 'required',
				'password' => 'required'
			];


			if (!$this->validate($rules)) {
				echo view('login_view', [
					'validation' => $this->validator
				]);
			} else {
				$username = ($this->request->getVar('username'));
				$password =  ($this->request->getVar('password'));

				$cek = $this->auth_model->q_login($username, $password);
				$data = $cek->getRowArray();

				$arr = array(
					'user_id' => $data['user_id'],
					'username' => $data['username'],
					'masuk' => TRUE
				);

				if ($cek->getFieldCount() > 0) {
					// $this->session->set('userdata', $arr);
					$this->session->set($arr);
					// echo session('arr');
					// echo $this->session->get('username');

					return redirect()->to(base_url());
				} else {
					echo $this->session->setflashdata('msg', 'Username atau Password Salah');
					return redirect()->to(base_url() . '/auth');
				}
			}
		}
	}

	public function logout()
	{
		if ($this->session->has('masuk') == TRUE) {
			# code...

			$this->session->destroy();

			$arr = [
				'username'  => 'Guest',
				// 'user_id' => '0',
				// 'masuk' => FALSE
			];

			$this->session->set($arr);
			echo "<script>alert('Berhsail keluar!');window.location = '" . base_url() . "';</script>";

			return redirect()->to(base_url());
		} else {
			// return redirect('base_url()');
			return redirect()->to(base_url());
		}
	}
}
