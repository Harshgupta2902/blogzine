<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('url', 'form'));
		$this->load->library('form_validation');


    }

	public function getBlogs(){
		$this->db->select('*');
		// $this->db->select('blogs.*, metadata.*');
		$this->db->from('blogs');
		// $this->db->join('metadata', 'blogs.id = metadata.blog_id', 'left');
		$query = $this->db->get();
		if ($query) {
			$response = array(
				'status' => 'success',
				'data' => $query->result_array()
			);
		} else {
			$response = array(
				'status' => 'failed',
				'data' => $array()
			);
		}
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
	}

	
	public function getBlogsfromId(){
		$id = $this->input->get('id'); 
		if (!$id) {
            $response = array('error' => true, 'message' => 'ID parameter is required');
            $this->output->set_output(json_encode($response));
            return;
        }

        // Fetch blog data based on the ID
        $blog = $this->db->get_where('blogs', array('id' => $id))->row_array();

        if ($blog) {
            $response = array('error' => true, 'blog' => $blog);
        } else {
            $response = array('error' => false, 'message' => 'Blog not found');
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($response));
		
	}

	
}
