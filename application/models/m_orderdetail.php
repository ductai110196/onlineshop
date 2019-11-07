<?php
require_once("dbhelper.php");
class m_orderdetail extends CI_Model implements dbhelper
{
    protected $table = "orderdetail";

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
}