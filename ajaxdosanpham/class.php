<?php
class testClass
{
    protected $db;
    function __construct()
    {
        $this->db = new mysqli("localhost", "root", "", "banhang");
        $this->db->set_charset("utf8");
    }
    //các method
    function ListLoaiSP($idCL)
    {
        settype($idCL, "int");
        $sql = "SELECT idLoai, TenLoai FROM loaisp  WHERE AnHien = 1
        AND idCL=$idCL
        ORDER BY ThuTu ASC ";
        $kq = $this->db->query($sql);
        if (!$kq) die('Lỗi trong hàm' . __FUNCTION__ . '' . $this->db->error);
        return $kq;
    } //end function ListLoaiSP

    function ListChungLoai()
    {
        $sql = "SELECT idCL, TenCL FROM chungloai  WHERE AnHien = 1
        ORDER BY ThuTu ASC ";
        $kq = $this->db->query($sql);
        if (!$kq) die('Lỗi trong hàm' . __FUNCTION__ . '' . $this->db->error);
        return $kq;
    } //end function ListLoaiSP


    function SanPhamTrongLoai($idLoai)
    {
        settype($idLoai, "int");
        $sql = "SELECT idDT, TenDT, urlHinh ,Gia
        FROM dienthoai
        WHERE AnHien=1
        AND idLoai = $idLoai
        LIMIT 0,12";
        $kq = $this->db->query($sql);
        if (!$kq) die($this->db->error);

        return $kq;
    } //end  function SanPhamTrongLoai
    function LayTenLoai($idLoai)
    {
        settype($idLoai, "int");
        $sql = "SELECT TenLoai FROM loaisp  WHERE AnHien = 1
        AND idLoai=$idLoai";
        $kq = $this->db->query($sql);
        if (!$kq) die('Lỗi trong hàm' . __FUNCTION__ . '' . $this->db->error);
        $row = $kq->fetch_row();
        $row_rs = $row[0];
        return $row_rs;
    }
    function SanPhamTimKiem($TuKhoa)
    {
        
        $sql = "SELECT idDT, TenDT, urlHinh ,Gia, MoTa
        FROM dienthoai
        WHERE AnHien=1
        AND (TenDT RegExp '$TuKhoa' or MoTa RegExp '$TuKhoa')
        LIMIT 0,12";
        $kq = $this->db->query($sql);
        if (!$kq) die($this->db->error);

        return $kq;
    }
} //class goc
