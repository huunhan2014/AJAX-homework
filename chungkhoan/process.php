<?php
require_once "class/tin.php";
$t = new tin;
$mack = isset($_POST['mack']) ? $_POST['mack'] : "";
echo $kq = $t->LayGiaCK($mack);
