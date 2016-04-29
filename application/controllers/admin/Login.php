<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('admin/Login_model');
    }

    public function index() {
        $this->load->view('admin/login_view');
    }

    public function verify() {
        $this->form_validation->set_rules('userName', 'userName', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');
        
        if ($this->form_validation->run() == FALSE) {
            //Field validation failed.  User redirected to login page      
            $this->session->set_flashdata('login_message', 'Invalid email address or password');
            redirect('index', 'refresh');
        } else {
            $userName = $this->input->post('userName');
            $password = $this->input->post('password');
            $data = array('user_name' => $userName,
                'password' => md5($password)
            );
            $result = $this->Login_model->check_valid_user($data);

            if ($result) {
                if ($result[0]["status"] == "active") {
                    $sess_array = array(
                        'id' => $result[0]['id'],
                        'username' => $result[0]['user_name']
                    );
                    $this->session->set_userdata('logged_in', $sess_array);

                    redirect(base_url() . "admin/master/city");
                } else {
                    $this->session->set_flashdata('login_message', 'User not in active status');
                    redirect(base_url() . 'admin/login', 'refresh');
                }
            } else {
                $this->session->set_flashdata('login_message', 'Invalid email address or password');
                redirect(base_url() . 'admin/login', 'refresh');
            }
        }
    }
    
    public function logout()
	{

            $this->session->sess_destroy();
            redirect(base_url()."admin/login");
	}

}
