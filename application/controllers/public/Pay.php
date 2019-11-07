<?php
class Pay extends Public_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('m_product');
        $this->load->model('m_cart');
        $this->load->library('cart');
        $this->load->library('session');
    }
    public function index()
    {
        $this->data["page_title"] = "Pay";
        $this->data["before_head"] = $this->cart->contents();
        $this->render("public/pay/index.php");
    }
}