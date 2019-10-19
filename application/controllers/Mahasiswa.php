<?php 	

		class Mahasiswa extends CI_Controller {
			public function index()
			{
				$this->load->database();
				$data['judul'] = 'Daftar Mahasiswa';
				$this->load->view('templates/header', $data);
				$this->load->view('mahasiswa/index', $data);
				$this->load->view('templates/footer');
			}
		}

 ?>