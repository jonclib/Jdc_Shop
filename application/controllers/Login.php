<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		$data[ 'title' ] = 'login';

		$this->load->view('layouts/header',$data);
		$this->load->view('login');
		$this->load->view('layouts/footer');
	}
}
