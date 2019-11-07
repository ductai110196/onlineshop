<?php

class User extends Admin_Controller
{


    protected $createby;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->database();
    }
    public function index()
    {
        $this->data['page_title'] = "Dashboard";
        $this->data['before_head'] = $this->m_user->getdata();
        $this->render("admin/user/index.php");
        $this->load->view("admin/user/script.php");
    }

    public function status()
    {
        if (isset($_GET['id']) && isset($_GET['status'])) {
            $id = $this->input->get('id');
            $status = $this->input->get('status') == 1 ? '0' : '1';
            $data = array("Status" => $status);
            $this->m_user->update($id, $data);
            echo 1;
        } else {
            echo 0;
        }
    }

    public function create()
    {
        $this->data["page_title"] = "Create Data";
        $this->render("admin/user/create.php");
    }

    public function add()
    {
        $this->createby = $this->session->userdata('login');
        $user_ses = $this->createby[0]->Name;
        $name = $this->input->get('hoten');
        $user = $this->input->get('taikhoan');
        $pass = $this->input->get('matkhau');
        $email = $this->input->get('email');
        $phone = $this->input->get('phone');
        $address = $this->input->get('diachi');
        $data = array(
            "Username" => $user,
            "Password" => md5($pass),
            "Name" => $name,
            "Address" => $address,
            "Email" => $email,
            "Phone" => $phone,
            "CreateBy" => $user_ses,
            "Status" => "1"
        );
        if ($this->m_user->insert($data)) {
            $this->toastr->success("Thêm dữ liệu thành công");
        } else {
            $this->toastr->error("Thêm dữ liệu thất bại");
        }


        redirect(base_url() . "index.php/admin/user/index");
    }

    //delete

    public function delete($id)
    {
        $this->createby = $this->session->userdata('login');
        if (isset($id) && !empty($id)) {
            if ($this->createby[0]->ID != $id) {
                $this->m_user->delete($id);
                $this->toastr->success("Xóa dữ liệu thành công");
            } else {
                $this->toastr->error("Xóa thất bại người dùng đang đăng nhập");
            }
        } else {
            $this->toastr->error("Đã có lỗi xảy ra");
        }
        redirect(base_url() . "index.php/admin/user/index");
    }
    //edit
    public function edit($id)
    {
        if (isset($id) && !empty($id)) {
            $this->data['page_title'] = "Edit";
            $this->data['before_head'] = $this->m_user->getbyid($id);
            $this->render("admin/user/edit.php");
        } else {
            $this->toastr->error("Đã có lỗi xảy ra");
            redirect(base_url() . "index.php/admin/user/index");
        }
    }

    public function update()
    {
        $this->createby = $this->session->userdata('login');
        $user_ses = $this->createby[0]->Name;
        $id =  $this->input->get('id');
        $name = $this->input->get('hoten');
        $user = $this->input->get('taikhoan');
        $email = $this->input->get('email');
        $phone = $this->input->get('phone');
        $address = $this->input->get('diachi');
        $data = array(
            "Username" => $user,
            "Name" => $name,
            "Address" => $address,
            "Email" => $email,
            "Phone" => $phone,
            "ModifileDate" => date("Y-m-d"),
            "ModifileBy" => $user_ses,
        );

        if ($this->m_user->update($id, $data)) {
            $this->toastr->success("Cập nhật liệu thành công");
        } else {
            $this->toastr->error("Cập nhật dữ liệu thất bại");
        }
        redirect(base_url() . "index.php/admin/user/index");
    }
    public function changes()
    {
        $data = $this->session->userdata('login');
        $id = $data[0]->ID;
        $pold = $data[0]->Password;
        $p1 = $this->input->get('psw1');
        $p2 = $this->input->get('psw2');
        $p3 = $this->input->get('psw3');
        if ($pold == md5($p1) && $p2 == $p3) {
            $p2 = md5($p2);
            $result = array('Password' => $p2);
            $this->m_user->update($id, $result);
            echo "<script>alert('Đổi mật khẩu thành công')</script>";
        } else {
            echo "<script>alert('Đổi mật khẩu thất bại')</script>";
        }
        redirect(base_url() . "index.php/security/acount");
    }
}