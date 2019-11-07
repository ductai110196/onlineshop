<?php
class m_page extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('m_product');
    }

    public function config_page($length, $display, $page_url, $curent_page, $page)
    {
        $config['total_rows']  =  $length;
        $config['per_page']  =  $display;
        $config['num_links']    =  $length;
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<nav aria-label="..."><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item"><a class="page-link" href="' . $curent_page . '">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = ['class' => 'page-link'];
        $config['base_url'] =  $page_url;


        $active = "active";

        if ($page == NULL) {
            $config['cur_tag_open'] = '<li class="page-item ' . $active . '"><a class="page-link" href="' . $curent_page . '">';
        } else {
            for ($i = 1; $i <= $length; $i++) {
                if ($i == $page) {
                    $config['num_tag_open'] = '<li class="page-item ' . $active . '">';
                }
            }
        }



        $config['uri_segment'] =  2;
        //create pagination
        $this->pagination->initialize($config);
        //create url pagination
        return $this->pagination->create_links();
    }
}