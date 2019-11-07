<?php
class Order extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data["page_title"] = "Order";
        $this->render("admin/order/index.php");
    }
}