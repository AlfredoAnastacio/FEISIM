<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('auth/login_rules'));
		$this->load->model('Auth');
	}
		
	public function index() {
		$this->load->view('login');
	}
	
	public function validate(){
		$this->form_validation->set_error_delimiters('', '');
		$rules = getLoginRules();
		$this->form_validation->set_rules($rules);
		
		if ($this->form_validation->run() === FALSE) {
            $errors = array(
				'username' => form_error('username'),
				'password' => form_error('password'),
			);
			echo json_encode($errors);
			$this->output->set_status_header(400);
        } else {
        	$user = $this->input->post('username');
			$pass = $this->input->post('password');
			if (!$res = $this->Auth->login($user, $pass)) {
				echo json_encode(array('msg' => 'Verifique sus credenciales'));
				$this->output->set_status_header(401);
				exit;
			}
			echo json_encode(array('msg' => 'Bienvenido'));
        }
	}
}
