<?php

class Peoples extends CI_Controller {

	public function index()
	{
		
		$data['judul'] = 'List Of Peoples';

		$this->load->model('Peoples_model', 'peoples');

		// pagination
		$this->load->library('pagination');

		// config
		$config['base_url'] = 'http://localhost/ci-app/peoples/index';
		$config['total_rows'] = $this->peoples->countAllPeoples();
		$config['per_page'] = 12;

		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start']);

		$this->load->view('tamplates/header', $data);
		$this->load->view('peoples/index', $data);
		$this->load->view('tamplates/footer');
	}
}