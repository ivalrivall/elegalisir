<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('layouts/header');
		$this->load->view('users/home');
		$this->load->view('layouts/footer');
	}
}
