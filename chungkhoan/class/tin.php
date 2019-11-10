<?php
require_once "goc.php";
class tin extends goc
{
    function LayGiaCK($mack)
    {
        $mack = $this->db->escape_string(trim(strip_tags($mack)));
        $sql = "SELECT gia FROM ck WHERE mack ='$mack'";
        $kq = $this->db->query($sql);
        if (!$kq) die($this->db->error);
        $row=$kq->fetch_row();
        $row_rs=$row[0];
        return $row_rs;
    }
}
