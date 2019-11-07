<?php
require_once('dbhelper.php');
class m_user extends CI_Model implements dbhelper
{
    private $table = "user";
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getdata($json = FALSE)
    {
        $data = $this->db->get($this->table)->result();
        return !$json  ? $data : json_encode($data);
    }
    public function insert($data = array())
    {
        return  $this->db->insert($this->table, $data);
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

    public function login($username, $password)
    {
        $sql = "SELECT * FROM `user` WHERE Username = '" . $username . "' and Password ='" . md5($password) . "'";
        return  $this->db->query($sql)->result();
    }

    public function getbyid($id)
    {
        $this->db->where('ID', $id);
        return $this->db->get($this->table)->result();
    }
}