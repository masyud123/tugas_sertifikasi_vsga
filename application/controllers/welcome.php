<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data = array(
        'captcha' => $this->recaptcha->getWidget(),
        'script_captcha'=> $this->recaptcha->getScriptTag()
    	);
		$this->load->view('templates/header');
		$this->load->view('captcha', $data);
		// echo "<pre>";
		// print_r($data); exit;
	}
}
