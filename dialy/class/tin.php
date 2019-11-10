<?php
require_once "goc.php";
class tin extends goc
{
    function ds_tinh(){
        $sql = "SELECT * FROM tinh ";
        $kq = $this->db->query($sql);
        if (!$kq) die($this->db->error);
        return $kq;
    }
    function LayTenQuan($matinh)
    {
        $matinh = $this->db->escape_string(trim(strip_tags($matinh)));
        $sql = "SELECT tenquan,maquan FROM quan WHERE matinh= $matinh";
        $kq = $this->db->query($sql);
        if (!$kq) die($this->db->error);
        return $kq;
    }
}
