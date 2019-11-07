<?php
class Product extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('m_product');
    }

    public function index()
    {
        $this->data['page_title'] = "Product";
        $this->data['before_head'] = $this->m_product->getdata();
        $this->data['before_content'] = $this->m_category->getdata();
        $this->render("admin/product/index.php");
        $this->load->view("admin/product/script.php");
    }

    public function status()
    {
        $id = $this->input->get('id');
        $status = $this->input->get('status');
        if (isset($id) && isset($status)) {
            $status = ($status == 1) ? "0" : "1";
            echo $this->m_product->update($id, array('Status' => $status)) ? "1" : "0";
        } else {
            echo "0";
        }
    }

    public function create()
    {
        $this->data["page_title"] = "Create";
        $this->data["before_head"] = $this->m_category->getdata();
        $this->render("admin/product/create.php");
        $this->load->view("admin/product/script.php");
    }




    public function add()
    {
        $ten = $this->input->get("tensanpham");
        $url = $this->input->get("url");
        $ma = $this->input->get("masanpham");
        $mota = $this->input->get("mota");
        $hinh = $this->input->get("hinhanh");
        $giagoc = $this->input->get("giabandau");
        $khuyenmai = $this->input->get("khuyenmai");
        $thue = $this->input->get("vat");
        $soluong = $this->input->get("soluong");
        $danhmuc = $this->input->get("danhmuc");
        $chitiet = $this->input->get("chitiet");
        $baohanh = $this->input->get("baohanh");
        //create by you?
        $user = $this->session->userdata('login');
        $createby = $user[0]->Name;
        //promotion price;
        $promotionprice = $this->price($giagoc, $khuyenmai, $thue);
        $data = array(
            'Name' => $ten,
            'Code' => $ma,
            'MetaTitle' => $url,
            'Description' => $mota,
            'Images' => $hinh,
            'Price' => $giagoc,
            'PromotionPrice' => $promotionprice,
            'Promotion' => $khuyenmai,
            'IncludeVAT' => $thue,
            'Quantity' => $soluong,
            'CategoryID' => $danhmuc,
            'Detail' => $chitiet,
            'Warranty' => $baohanh,
            'CreateBy' => $createby
        );
        if (!empty($data)) {
            if ($this->m_product->insert($data)) {
                $this->toastr->success("Thêm sản phẩm thành công");
            } else {
                $this->toastr->error("Thêm sản phẩm thất bại");
            }
        } else {
            $this->toastr->error("Đã có lỗi xảy ra");
        }
        redirect(base_url() . "index.php/admin/product");
    }



    //edit

    public function edit($id)
    {
        $this->data["page_title"] = "Edit";
        $this->data["before_head"] = $this->m_category->getdata();
        $this->data["before_content"] = $this->m_product->getbyid($id);
        $this->render("admin/product/edit.php");
        $this->load->view("admin/product/script.php");
    }


    public function update()
    {
        $id = $this->input->get('id');
        $ten = $this->input->get("tensanpham");
        $url = $this->input->get("url");
        $ma = $this->input->get("masanpham");
        $mota = $this->input->get("mota");
        $hinh = $this->input->get("hinhanh");
        $giagoc = $this->input->get("giabandau");
        $khuyenmai = $this->input->get("khuyenmai");
        $thue = $this->input->get("vat");
        $soluong = $this->input->get("soluong");
        $danhmuc = $this->input->get("danhmuc");
        $chitiet = $this->input->get("chitiet");
        $baohanh = $this->input->get("baohanh");
        //create by you?
        $user = $this->session->userdata('login');
        $createby = $user[0]->Name;
        //promotion price;
        $promotionprice = $this->price($giagoc, $khuyenmai, $thue);
        $data = array(
            'Name' => $ten,
            'Code' => $ma,
            'MetaTitle' => $url,
            'Description' => $mota,
            'Images' => $hinh,
            'Price' => $giagoc,
            'PromotionPrice' => $promotionprice,
            'Promotion' => $khuyenmai,
            'IncludeVAT' => $thue,
            'Quantity' => $soluong,
            'CategoryID' => $danhmuc,
            'Detail' => $chitiet,
            'Warranty' => $baohanh,
            'ModifileDate' => date("Y-m-d H:i:s"),
            'ModifileBy' => $createby,
        );
        if (!empty($data)) {
            if ($this->m_product->update($id, $data)) {
                $this->toastr->success("Cập nhật sản phẩm thành công");
            } else {
                $this->toastr->error("Cập nhật sản phẩm thất bại");
            }
        } else {
            $this->toastr->error("Đã có lỗi xảy ra");
        }
        redirect(base_url() . "index.php/admin/product");
    }

    //delete


    public function delete($id)
    {
        if (isset($id) && !empty($id)) {
            if ($this->m_product->delete($id)) {
                $this->toastr->success("Xóa sản phẩm thành công");
            } else {
                $this->toastr->error("Xóa sản phẩm thất bại");
            }
        } else {
            $this->toastr->error("Đã có lỗi xảy ra");
        }
        redirect(base_url() . "index.php/admin/product");
    }


    public function price($giagoc, $khuyenmai, $thue)
    {
        $promotionprice = 0;
        if (is_numeric($giagoc) && is_numeric($khuyenmai) && is_numeric($thue)) {
            if ($khuyenmai < 0 && $thue > 0) {
                $promotionprice = $giagoc + ($giagoc * ($thue / 100));
            } else if ($khuyenmai > 0 && $thue < 0) {
                $promotionprice = $giagoc - ($giagoc * ($khuyenmai / 100));
            } else {
                $giakhuyenmai =   $giagoc * ($khuyenmai / 100);
                $giathue = $giagoc * ($thue / 100);
                $promotionprice = $giagoc - $giakhuyenmai + $giathue;
            }
        }
        return $promotionprice;
    }
}