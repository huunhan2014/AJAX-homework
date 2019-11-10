<?php
require_once "class.php";
$t = new testClass;
$idCL = isset($_POST['idCL']) ? $_POST['idCL'] : "";

?>
<select id="loai" name="loai">
    <option>--Chọn loai sp--</option>
    <?php
    $kq = $t->ListLoaiSP($idCL);
    if ($kq->num_rows == 0) {
        ?>
        <option value="cc" disabled> ko co loai sp</option>
        <?php } else {
            while ($row = $kq->fetch_assoc()) {
                ?>
            <option value="<?= $row['idLoai']; ?>"> <?= $row['TenLoai']; ?> </option>
        <?php }  ?>

    <?php } ?>

</select>
<script type="text/javascript">
    $(document).ready(function(e) {

        $("#loai").change(function() {

            $.ajax({
                type: "POST",
                url: "process.php",
                data: "idLoai=" + $(this).val(),
                success: function(data) {
                    $("#sanpham").html(data);

                }
            });
        });


    });
</script>