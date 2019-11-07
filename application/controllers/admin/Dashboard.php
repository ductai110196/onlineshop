<?php
class Dashboard extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['page_title'] = 'Dashboard';
        $this->render('admin/home/index.php');
        $this->load->view('admin/home/script.php');
    }
}