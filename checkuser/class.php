<?php
class testClass
{
    protected $db;
    function __construct()
    {
        $this->db = new mysqli("localhost", "root", "", "news");
        $this->db->set_charset("utf8");
    }
    //các method
    function kiemtra_user($user)
    {
        $user = $this->db->escape_string(trim(strip_tags($user)));
        $sql = "SELECT * from users where Username='$user' ";
        $kq = $this->db->query($sql);
        if (!$kq) die($this->db->error);
        return $kq;
    }
} //class goc
