<?php

class Order extends Public_Controller
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
        $this->data["page_title"] = 'Order';
        $this->data["before_head"] = $this->cart->contents();
        $this->session->set_userdata('cart_ses', count($this->cart->contents()));
        $this->render("public/order/index.php");
        $this->load->view("public/order/script.php");
    }
    public function addcart($id, $sl)
    {
        $cart  = $this->cart->contents();
        $cart = array_values($cart);
        $check = false;
        if (count($cart) > 0) {
            for ($i = 0; $i < count($cart); $i++) {
                if ($cart[$i]['id'] == $id) {
                    $data = array(
                        'rowid' => $cart[$i]['rowid'],
                        'qty' => $sl,
                    );
                    $this->cart->update($data);
                    $this->toastr->info("Cập nhật giỏ hàng thành công");
                    $check = true;
                }
            }
            if ($check == false) {
                $product = $this->m_product->getbyid($id);
                $data = array(
                    'id' => $product[0]->ID,
                    'name' => $product[0]->Name,
                    'img' => $product[0]->Images,
                    'qty' => $sl,
                    'price' => $product[0]->PromotionPrice,
                );
                $this->cart->insert($data);
                $this->toastr->info("Thêm giỏ hàng thành công");
            }
        } else {
            $product = $this->m_product->getbyid($id);
            $data = array(
                'id' => $product[0]->ID,
                'name' => $product[0]->Name,
                'img' => $product[0]->Images,
                'qty' => $sl,
                'price' => $product[0]->PromotionPrice,
            );
            $this->cart->insert($data);
            $this->toastr->info("Thêm giỏ hàng thành công");
        }
        redirect(base_url() . "index.php/gio-hang");
    }
    public function delete($id)
    {
        $cart  = $this->cart->contents();
        foreach ($cart as $item) {
            if ($item["id"] == $id) {
                $data = array(
                    'rowid'   => $item['rowid'],
                    'qty'     => 0
                );
                $this->cart->update($data);
                $this->toastr->info("Xóa giỏ hàng thành công");
            }
        }
        redirect(base_url() . "index.php/gio-hang");
    }

    public function ParentSession($session)
    {
        $temp = json_encode($session);
        return json_decode($temp);
    }


    public function getkey($key, $data = array())
    {
        $temp = "";
        for ($i = 0; $i < count($data); $i++) {
            if ($data[$i] == $key) {
                return true;
            } else {
                return false;
            }
        }
    }
}