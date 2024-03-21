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
			$data['totalBlogsCount'] = $this->db->count_all('blogs');
			$data['latestBlogs'] = $this->db->select('*')->from('blogs')->order_by('created_at', 'desc')->limit(3)->get()->result_array();		
			$data['totalBlogs'] = $this->db->get('blogs')->result_array();

			$this->load->view('Dashboard/home', $data);
		} else {
			redirect('sign_in');
		}
	}

	
}
