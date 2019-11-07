<?php
interface dbhelper
{
    public function getdata();
    public function getbyid($id);
    public function insert($data = array());
    public function update($id, $data = array());
    public function delete($id);
}