<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_client extends CI_Controller {

    public function index()
    { 	//echo "here";exit;
        $this->load->helper('url');
        $this->load->library('curl');
		
		$rest_url = config_item('rest_server') . 'api/example/users/format/json';

		$this->render($rest_url);		
		
    }
	
    public function render($rest_url)
    {
        // Optional, delete this line if your API is open.
        $username = 'admin';
        $password = '1234';
		
		$this->curl->create($rest_url);
		
        $this->curl->http_login($username, $password);

        $response = json_decode($this->curl->get()->execute(), TRUE);
		
		$data['response'] = $response;
		
		//var_dump($data);exit;
		
		$this->load->view('header');
        $this->load->view('template', $data);
		$this->load->view('footer');		
	}
	
    public function form_registrasi()
    { 	//echo "here";exit;
        $this->load->helper('url');
        $this->load->library('curl');	
	
		$data = null;
		
		//$data['count_user'] = 4;
		
		$this->load->view('header');
        $this->load->view('form_registrasi', $data);
		$this->load->view('footer');		
	}	
	
    public function simpan_form()
    { 	//echo "here";exit;
		$uid = $this->input->get_post('hash');
		$nama = $this->input->get_post('nama');
		$alamat = $this->input->get_post('alamat');
		
		var_dump($uid);exit;
	
        $this->index();		
	}	
	
	
}
