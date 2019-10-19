<?php 	

		class Mahasiswa extends CI_Controller {
			
			public function __construct()
			{
				parent::__construct();
				$this->load->database(); 
			}

			public function index()
			{
				$data['judul'] = 'Daftar Mahasiswa';
				$this->load->view('templates/header', $data);
				$this->load->view('mahasiswa/index', $data);
				$this->load->view('templates/footer');
			}


		}

 ?>