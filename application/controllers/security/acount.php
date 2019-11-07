<?php

class acount extends CI_Controller
{
    protected $data = array();
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('m_user');
        $this->load->library('session');
    }
    public function index()
    {
        $this->data['page_title'] = "Login";
        $this->load->view('security/index.php', $this->data);
    }

    public function login()
    {
        if (isset($_GET['login']) && isset($_GET['username']) && isset($_GET['password'])) {

            $result =  $this->m_user->login($this->input->get('username'), $this->input->get('password'));

            if ($result != NULL) {
                $this->session->set_userdata("login", $result);
                redirect(base_url() . "index.php/admin/dashboard/index");
            } else {
                redirect(base_url() . "index.php/security/acount");
            }
        } else {
            redirect(base_url() . "index.php/security/acount");
        }
    }

    public function logout()
    {
        $session =  $this->session->userdata("login");
        if (isset($session)) {
            $this->session->unset_userdata('login');
        }
        redirect(base_url() . "index.php/security/acount");
    }
}