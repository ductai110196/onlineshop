<?php
require_once("dbhelper.php");
class m_category extends CI_Model implements dbhelper
{
    protected $table = "productcategory";
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getdata($json = false)
    {
        $result = $this->db->get($this->table)->result();
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


    public function getparentid($id)
    {
        $this->db->where('ParentID', $id);
        return $this->db->get($this->table)->result();
    }

    public function getsubitem()
    {
        $cate1 = $this->getdata($this->table);
        $data = array();
        foreach ($cate1 as $item) {
            foreach ($cate1 as $value) {
                if ($value->ParentID == $item->ID) {
                    $data[] = ['ID' => $value->ID, 'Parent' => $item->ID, 'Name' => $item->Name];
                }
            }
        }
        return $data;
    }
}