<?php
class Home extends Public_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_product');
    }

    public function index()
    {
        $this->data['page_title'] = 'Home';
        $this->data['before_head'] = $this->m_product->getcate();
        $this->data['pro_phone'] = $this->m_product->getphonetop4();
        $this->render("public/home/index.php");
    }
}