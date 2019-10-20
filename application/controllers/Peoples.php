<?php 	

		class Peoples extends CI_Controller 
		{
			public function index()
			{
				$data['judul'] = 'List of Peoples';

				$this->load->model('Peoples_model', 'peoples');

				// PAGINATION
				$this->load->library('pagination');

				// config
				$config['base_url'] = 'http://localhost/ci-app/peoples/index';
				$config['total_rows'] = $this->peoples->countAllPeoples();

				$data['peoples'] = $this->peoples->getPeoples(12, 30);

				$this->load->view('templates/header', $data);
				$this->load->view('peoples/index', $data);
				$this->load->view('templates/footer');
			}
		}