<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('url', 'form'));
		$this->load->library('session');
		$this->load->library('form_validation');


    }

	public function index()
	{
		$userData = $this->session->userdata('user_data');

		// Check if session data exists
		if ($userData) {
			$data['userData'] = $userData;
			$this->load->view('Dashboard/home', $data);
		} else {
			// Redirect to the login page
			redirect('sign_in'); // Assuming 'login' is the route to your login page
		}
	}

	
}
