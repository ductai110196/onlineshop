<?php
class Product extends Public_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('m_page');
    }

    public function product($cate, $id)
    {
        $this->data['page_title'] = "Product";
        $this->data['before_head'] = $this->m_product->getbyid($id);
        $this->render("public/product/index.php");
        $this->load->view("public/product/script");
    }
    //ckceck product in category
    public function category($link, $id, $page = NULL)
    {
        $this->data['page_title'] = "Product";
        $page_url = base_url() . 'index.php/san-pham/' . $link . '-' . $id . '/trang';
        $curent_page = base_url() . 'index.php/san-pham/' . $link . '-' . $id;
        $result = "";
        $count = "";
        $display = 4;
        $offset  = ($this->uri->segment(4) == '') ? 0 : $this->uri->segment(4);
        //$next = base_url() . 'index.php/san-pham/' . $link . '-' . $id . '/trang' . '/' . ($offset + 1);
        if (!empty($this->m_product->getproductcate(0, $id, $offset, $display))) {
            $result = $this->m_product->getproductcate(0, $id, $offset, $display);
            $count = count($this->m_product->getproductcate(1, $id));
        } else {
            $result = $this->m_product->getproductcateid(0, $id, $offset, $display);
            $count = count($this->m_product->getproductcateid(1, $id));
        }

        $this->data['before_head']  = $result;

        $this->data['page_product'] = $this->m_page->config_page($count, $display, $page_url, $curent_page, $page);

        //$this->data['page'] = $page;

        $this->render("public/product/productcate.php");

        $this->load->view('public/product/script.php');
    }
}