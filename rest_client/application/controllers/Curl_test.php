<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Curl_test extends CI_Controller {

    public function index()
    {
        $this->load->helper('url');
        $this->load->library('curl');
		
		$rest_url = config_item('rest_server') . 'api/example/users/format/json';

		$this->render($rest_url);
    }
	
    public function get_users($user_id = NULL)
    {
        $this->load->helper('url');
        $this->load->library('curl');
		
		if($user_id){
			$rest_url = config_item('rest_server') . 'api/example/users/id/' . $user_id . '/format/json';
		}else{
			$rest_url = config_item('rest_server') . 'api/example/users/format/json';
		}       
		//var_dump($response);exit;
		
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
        $this->load->view('curl_test', $data);
		$this->load->view('footer');		
	}
	
}
