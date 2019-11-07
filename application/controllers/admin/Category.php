<?php

class Category extends Admin_Controller
{
    protected $createby;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_category');
        $this->load->database();
    }

    public function index()
    {
        $this->data['page_title'] = "Category";
        $this->data['before_head'] = $this->m_category->getdata();
        $this->render("admin/category/index.php");
        $this->load->view("admin/category/script.php");
    }
    //status

    public function status()
    {
        if (isset($_GET['id']) && isset($_GET['status'])) {
            $id = $this->input->get('id');
            $status = $this->input->get('status');
            $status =  $status == 1 ?  0 : 1;
            $data = array('ID' => $id, 'Status' => $status);
            $result = $this->m_category->update($id, $data);
            echo $result != NULL ? "1" : "0";
        } else {
            echo "0";
        }
    }

    //show on home
    public function show()
    {
        if (isset($_GET['id']) && isset($_GET['show'])) {
            $id = $this->input->get('id');
            $show = $this->input->get('show');
            $show =  $show == 1 ? 0 : 1;
            $data = array('ID' => $id, 'ShowOnHome' => $show);
            $result = $this->m_category->update($id, $data);
            echo $result != NULL ? "1" : "0";
        } else {
            echo "0";
        }
    }

    //create

    public function create()
    {
        $this->data['page_title'] = "create";
        $this->data['before_head'] = $this->m_category->getdata();
        $this->data['before_content'] = $this->m_category->getparentid(0);
        $this->render("admin/category/create.php");
        $this->load->view("admin/category/script.php");
    }


    public function edit($id)
    {
        if (isset($id) && !empty($id)) {
            $this->data['page_title'] = "create";
            $this->data['before_head'] = $this->m_category->getdata();
            $this->data['before_content'] = $this->m_category->getbyid($id);
            $this->render("admin/category/edit.php");
            $this->load->view("admin/category/script.php");
        } else {
            $this->toastr->error("Đã có lỗi xảy ra");
        }
    }

    public function add()
    {
        $this->createby = $this->session->userdata('login');
        $user_ses = $this->createby[0]->Name;
        $name = $this->input->get('tenloai');
        $url = $this->input->get('urltile');
        $parentid = $this->input->get('danhmuc');
        $parentid = $parentid == 0 ? "NULL" : $parentid;
        $data = array(
            'Name' => $name,
            'MetaTitle' => $url,
            'ParentID' => $parentid,
            'CreateBy' => $user_ses
        );
        if ($this->m_category->insert($data)) {
            $this->toastr->info("Thêm thành công");
        } else {
            $this->toastr->info("Thêm thất bại");
        }
        redirect(base_url() . "index.php/admin/category");
    }
    //update

    public function update()
    {
        $id = $this->input->get('id');
        $this->createby = $this->session->userdata('login');
        $user_ses = $this->createby[0]->Name;
        $name = $this->input->get('tenloai');
        $url = $this->input->get('urltile');
        $parentid = $this->input->get('danhmuc');
        $parentid = $parentid == 0 ? "NULL" : $parentid;
        $data = array(
            'Name' => $name,
            'MetaTitle' => $url,
            'ParentID' => $parentid,
            'ModifileDate' => date('Y-m-d'),
            'ModifileBy ' => $user_ses
        );
        if ($this->m_category->update($id, $data)) {
            $this->toastr->info("Sửa thành công");
        } else {
            $this->toastr->info("Sửa thất bại");
        }
        redirect(base_url() . "index.php/admin/category");
    }

    //delete 

    public function delete($id)
    {
        if (isset($id) && !empty($id)) {
            if ($this->m_category->delete($id)) {
                $this->toastr->info("Xóa dữ liệu thành công");
            } else {
                $this->toastr->error("Xóa dữ liệu thất bại");
            }
        } else {
            $this->toastr->error("Đã có lỗi xảy ra");
        }
        redirect(base_url() . "index.php/admin/category");
    }
}