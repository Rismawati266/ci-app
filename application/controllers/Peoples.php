<?php 	

		class Peoples extends CI_Controller 
		{

			public function index()
			{
				$data['judul'] = 'List of Peoples';

				$this->load->model('Peoples_model', 'peoples');

				// load library
				$this->load->library('pagination');

				// config
				$config['base_url'] = 'http://localhost:8080/ci-app/peoples/index';
				$config['total_rows'] = $this->peoples->countAllPeoples();
				$config['per_page'] =12;

				// Initialzie
				$this->pagination->initialize($config);

				$data['peoples'] = $this->peoples->getPeoples(12, 30);

				$this->load->view('templates/header', $data);
				$this->load->view('peoples/index', $data);
				$this->load->view('templates/footer');
			}

		}