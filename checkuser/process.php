<?php
require_once "class.php";
$t = new testClass;
$user = isset($_GET['u']) ? $_GET['u'] : "";
if ($user == "") {
    echo "rong";
} else {
    $kq = $t->kiemtra_user($user);
    if ($kq->num_rows > 0) {
        // $d = $kq->fetch_array();
        echo "co";
    } else {
        echo "khong";
    }
}
