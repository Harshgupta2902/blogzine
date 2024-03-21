<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Auth/login');
		} else {
			$email = $this->input->post('email'); 
			$password = $this->input->post('password');

			$query = $this->db->get_where('users', array('email' => $email, 'password' => $password));
			
			if ($query->num_rows() > 0) {
				$data['user'] = $query->result_array();
				$this->session->set_userdata('user_data', $query->result_array());
				redirect('dashboard');
			} else {

				$data['error'] = 'Invalid username or password';
                $this->load->view('Auth/login', $data);
			}
		}
	}

	public function register()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');

		if ($this->form_validation->run() == FALSE) {
			$errors = array();

			if (form_error('name')) {
				$errors[] = strip_tags(form_error('name'));
			}

			if (form_error('email')) {
				$errors[] = strip_tags(form_error('email'));
			}

			if (form_error('password')) {
				$errors[] = strip_tags(form_error('password'));
			}

			if (form_error('phone')) {
				$errors[] = strip_tags(form_error('phone'));
			}
			$first_error = reset($errors); // Get the first error message

			$result['status'] = 0;
			$result['message'] = $first_error;
		} else {
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$phone = $this->input->post('phone');

			// Insert new user into the database
			$data = array(
				'name' => $name,
				'email' => $email,
				'phone' => $phone,
				'password' => $password
			);

			$insert_result = $this->db->insert('users', $data);

			if ($insert_result) {
				$user_query = $this->db->get_where('users', array('email' => $email));
            	$registered_user = $user_query->row_array();

				
				$result['status'] = 1;
				$result['message'] = 'Registration successful.';
				$result['user'] = $registered_user;
			} else {
				$result['status'] = 0;
				$result['message'] = 'Registration failed. Please try again later.';
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($result));
	}

	
}
