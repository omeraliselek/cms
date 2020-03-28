<?php
/* Product Tanımlamasını Yap */
class Product_model extends CI_Model
{
    public $tableName = "products";

    public function __construct()
    {
        parent::__construct();
    }


    /*İd Göre Getir*/
    public function get($where = array())
    {
        return $this->db->where($where)->get($this->tableName)->row();
    }

    /*Veritabanından Hepsini Getir */
    public function get_all($where = Array())
    {

        return $this->db->where($where)->get($this->tableName)->result();

    }

    /* veritabanına ekleme işlemi yap */
    public function add($data = array())
    {
        return $this->db->insert($this->tableName, $data);

    }

    /* veritabanına Güncelleme işlemi yap */
    public function update($where = array(), $data = array())
    {
        return $this->db->where($where)->update($this->tableName, $data);
    }


    public function delete($where = array())
    {

        return $this->db->where($where)->delete($this->tableName);

    }
}