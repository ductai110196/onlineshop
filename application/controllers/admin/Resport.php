<?php class Resport extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data["page_title"] = "Resport";
        $this->render("admin/resport/index.php");
    }
}