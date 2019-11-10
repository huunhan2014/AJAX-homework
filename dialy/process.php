<?php
require_once "class/tin.php";
$t = new tin;
$matinh = isset($_GET['q']) ? $_GET['q'] : "";

?>

 
            <?php
            $kq = $t->LayTenQuan($matinh);
            while ($row = $kq->fetch_assoc()) {

                ?>
                <option value="<?= $row['maquan']; ?>"> <?= $row['tenquan']; ?> </option>
            <?php } ?>
  
