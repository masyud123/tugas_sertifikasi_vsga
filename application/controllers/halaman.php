<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

	public function validasi_captcha()
    {
        $recaptcha	= $this->input->post('g-recaptcha-response');
		$response 	= $this->recaptcha->verifyResponse($recaptcha);

		
		if(!isset($response['success']) || $response['success'] <> FALSE)
		{
			redirect('halaman/dashboard/');
		}else{
			$this->session->set_flashdata('captcha','<div class="alert alert-danger alert-dismissible fade show" role="alert" style="position: absolute; margin-left: 50%; margin-top: 23%; transform: translate(-50%,-50%); width:30%; value:"">
	                     Captcha Wajib Diisi!
	                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                        <span aria-hidden="true">&times;</span>
	                      </button>
	                    </div>');
			redirect('welcome/index');
		}
	}

	public function dashboard()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard');
		$this->load->view('templates/footer');
	}

	public function login()
	{
		$this->load->view('templates/header');
		$this->load->view('login');
	}

	public function contact()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('contact');
		$this->load->view('templates/footer');
	}

	public function admin()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard');
		$this->load->view('templates/footer');
	}

	public function user()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard');
		$this->load->view('templates/footer');
	}
}
