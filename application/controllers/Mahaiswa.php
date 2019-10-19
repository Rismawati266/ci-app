<?php
	
	class Mahasiswa extends CI_Controller 
	{
		public function index()
		{
			$this->load->view('templates/header');
			$this->load->view('mahasiswa/index');
			$this->load->view('templates/footer');
		}
	}