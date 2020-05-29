<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('view_index');
	}

	public function about()
	{
		$this->load->view('view_about');
	}

	public function features()
	{
		$this->load->view('view_features');
	}

	public function portofolio()
	{
		$this->load->view('view_portofolio');
	}

	public function faq()
	{
		$this->load->view('view_faq');
	}

	public function contact()
	{
		$this->load->view('view_contact');
	}

	public function signin()
	{
		$this->load->view('view_signin');
	}

	public function signup()
	{
		$this->load->view('view_signup');
	}
}
