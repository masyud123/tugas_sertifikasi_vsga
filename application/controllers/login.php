<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function auth()
		{
			$this->form_validation->set_rules('email', 'email', 'required', ['required' => 'Email wajib diisi!']);
			$this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password wajib diisi!']);
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('templates/header');
				$this->load->view('login');
			} else {
				$auth = $this->model_login->cek_login();

				if ($auth == FALSE) {
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						  Email atau Password Anda Salah!
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>');
					redirect('halaman/login');
				} else {
					$this->session->set_userdata('username', $auth->username);
					$this->session->set_userdata('id_user', $auth->id_user);
					$this->session->set_userdata('email', $auth->email);
					$this->session->set_userdata('role_id', $auth->role_id);

					switch ($auth->role_id) {
						case 1:
							redirect('halaman/admin');
							break;
						case 2:
							redirect('halaman/user');
							break;
						default:
							break;
					}
				}
			}
		}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('halaman/dashboard');
	}
}