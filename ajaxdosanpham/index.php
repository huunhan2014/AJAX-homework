<?php require_once "class.php";
$t = new testClass;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Do San Pham</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- <script type="text/javascript" src="script.js"></script> -->
    <link rel="shortcut icon" href="favicon.png" type="image/png" />

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800&effect=fire-animation' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>
    <form id="form1" action="" method="POST" name="form1">

        <select name="chungloai" id="chungloai">
            <option>--Chọn chung loai--</option>
            <?php
            $kq = $t->ListChungLoai();
            while ($row = $kq->fetch_assoc()) {
                ?>
                <option value="<?= $row['idCL']; ?>"> <?= $row['TenCL']; ?> </option>
            <?php } ?>
        </select>

    </form>

    <form name="form2" id="form2">
        <input type="text" name="TuKhoa" id="TuKhoa">
        <input type="submit" value="Tim">
    </form>

    <br>
    <div id="loaiDiv">

    </div>

    <br>
    <div id="sanpham" class="row products" style="width: 1140px; height: 648px;">

    </div>
    <script type="text/javascript">
        $(document).ready(function(e) {

            $("#chungloai").change(function() {
                $.ajax({
                    type: "POST",
                    url: "processCL.php",
                    data: "idCL=" + $(this).val(),
                    success: function(data) {
                        $("#loaiDiv").html(data);

                    }
                });
            });

            $("#form2").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "processTim.php",
                    data: $(this).serialize(),
                    success: function(data) {
                        $("#sanpham").html(data);

                    }
                });
            });

        });
    </script>

</body>

</html>