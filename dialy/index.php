<?php require_once "class/tin.php";
$t = new tin;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Dia Ly</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
    <!-- <script type="text/javascript" src="script.js"></script> -->
</head>

<body>
    <form id="form1" action="" method="POST" name="form1">

        <select name="tinh" id="tinh" >
            <?php
            $kq_tinh = $t->ds_tinh();
            while ($row_tinh = $kq_tinh->fetch_array()) {

                ?>
                <option value="<?= $row_tinh['matinh']; ?>"> <?= $row_tinh['tentinh']; ?> </option>
            <?php } ?>
        </select>

    </form>

    <br>
    <!-- <div id="quan"></div> -->

    <select name="quan" id="quan">
        <option>--Chọn Tinh--</option>
        <option disabled> Vui lòng chọn Tinh trước</option>
    </select>

    <script>
        jQuery(function($) {
            $('#tinh').change(function() {
                $.get(
                    "process.php",
                    "q=" + $(this).val(),
                    function(d) {
                        $('#quan').html(d);
                    }); //$.get
            });
        })(jQuery);
    </script>
</body>

</html>