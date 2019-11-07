<?php defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    protected $data = array();
    function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = 'CI App';
        $this->data['before_head'] = '';
        $this->data['before_content'] = '';
        $this->data['before_body'] = '';
        $this->data['modal'] = '';
        $this->data['script'] = '';
    }

    protected function render($the_view = NULL, $template = 'master')
    {
        if ($template == 'json' || $this->input->is_ajax_request()) {
            header('Content-Type: application/json');
            echo json_encode($this->data);
        } else {
            $this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view, $this->data, TRUE);
            $this->load->view('templates/' . $template . '_view', $this->data);
        }
    }
}


class Admin_Controller extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = 'CI App - Dashboard';
        $session = $this->session->userdata("login");
        if (!isset($session)) {
            redirect(base_url() . "index.php/security/acount");
        }
        date_default_timezone_set('Asia/Ho_Chi_Minh');
    }

    protected function render($the_view = NULL, $template = 'admin_master')
    {
        parent::render($the_view, $template);
    }
}


class Public_Controller extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = 'CI App - Dashboard';
        $this->load->database();
        $this->load->model("m_category");
    }

    protected function render($the_view = NULL, $template = 'public_master')
    {
        $this->data["cate"] = $this->m_category->getdata();
        $this->data["cateparent"] = $this->m_category->getparentid(0);
        parent::render($the_view, $template);
    }
}