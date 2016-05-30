<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post_test extends CI_Controller {

    public function index()
    {
        $this->load->helper('url');
        $this->load->library('curl');
		
		$rest_url = config_item('rest_server') . 'api/example/users/';
		
		$this->render($rest_url);
    }
	
    public function render($rest_url)
    {
        // Optional, delete this line if your API is open.
        $username = 'admin';
        $password = '1234';
		
        $headers = array('Accept' => 'application/json');
        $options = array('auth' => array('admin', '1234'));
        $data = array('nama' => 'John', 'alamat' => 'slipi');		
		
		$this->curl->create($rest_url);
		
        $this->curl->http_login($username, $password);
	
        $response = json_decode($this->curl->post($data)->execute(), TRUE);
		
		$data['response'] = $response;
		
		//var_dump($data);exit;
		
		$this->load->view('header');
        $this->load->view('post_test', $data);
		$this->load->view('footer');		
	}	
	
}
