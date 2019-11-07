<?php
require_once('dbhelper.php');
class m_product extends CI_Model implements dbhelper
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    protected $table = 'product';
    protected $sql = "";
    public function getdata($json = false)
    {
        $result  = $this->db->get($this->table)->result();
        return !$json ? $result : json_encode($result);
    }
    public function getbyid($id)
    {
        $this->db->where('ID', $id);
        return $this->db->get($this->table)->result();
    }
    public function insert($data = array())
    {
        return $this->db->insert($this->table, $data);
    }
    public function update($id, $data = array())
    {
        $this->db->where('ID', $id);
        return $this->db->update($this->table, $data);
    }
    public function delete($id)
    {
        $this->db->where('ID', $id);
        return $this->db->delete($this->table);
    }

    public function getcate()
    {
        $this->sql = "SELECT product.ID,product.Name,product.Price,product.Images,product.PromotionPrice,product.MetaTitle FROM product,productcategory WHERE product.CategoryID = productcategory.ID AND product.CategoryID = 16 LIMIT 4";
        return $this->db->query($this->sql)->result();
    }

    public function getphonetop4()
    {
        $this->sql = "SELECT product.ID,product.Name,product.Price,product.Images,product.PromotionPrice,product.MetaTitle FROM product,productcategory WHERE product.CategoryID = productcategory.ID AND productcategory.ParentID = 9 LIMIT 4";
        return $this->db->query($this->sql)->result();
    }

    public function getproductcate($check = 1, $id = '', $from = '', $to = '')
    {
        if ($check == 1) {
            $this->sql = "SELECT product.ID,product.Name,product.Price,product.Images,product.PromotionPrice,product.MetaTitle FROM product,productcategory WHERE product.CategoryID = productcategory.ID AND productcategory.ParentID = " . $id . "";
        } else {
            $this->sql = "SELECT product.ID,product.Name,product.Price,product.Images,product.PromotionPrice,product.MetaTitle FROM product,productcategory WHERE product.CategoryID = productcategory.ID AND productcategory.ParentID = " . $id . " ORDER BY product.Name ASC LIMIT " . $from . "," . $to . "";
        }
        return $this->db->query($this->sql)->result();
    }

    public function getproductcateid($check = 1, $id = '', $from = '', $to = '')
    {
        if ($check == 1) {
            $this->sql = "SELECT product.ID,product.Name,product.Price,product.Images,product.PromotionPrice,product.MetaTitle FROM product,productcategory WHERE product.CategoryID = productcategory.ID AND productcategory.ID = " . $id . "";
        } else {
            $this->sql = "SELECT product.ID,product.Name,product.Price,product.Images,product.PromotionPrice,product.MetaTitle FROM product,productcategory WHERE product.CategoryID = productcategory.ID AND productcategory.ID = " . $id . " order BY product.Name ASC LIMIT " . $from . "," . $to . "";
        }
        return $this->db->query($this->sql)->result();
    }
}