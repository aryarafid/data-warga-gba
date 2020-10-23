<?php

namespace App\Controllers;

use App\Models\auth_model;

class Home extends BaseController
{
	public function __construct()
	{
		// $session = session();
	}

	public function index()
	{

		if ($this->session->masuk == FALSE) {
			$arr = [
				'username'  => 'Guest',
				// 'user_id' => '0',
				'masuk' => FALSE
			];

			$this->session->set($arr);
		}

		$kkcount = $this->db->table('data_kk')->countAll();
		$dvcount = $this->db->table('data_individu')->countAll();

		$data = [
			'title'	=> 'Dashboard Aplikasi GBA ',
			'heading' => '',
			'kkcount' => $kkcount,
			'dvcount' => $dvcount
		];

		// echo $this->session->username;

		return view('dashboard', $data);
	}

	//--------------------------------------------------------------------

}
