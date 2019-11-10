<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Chung Khoan</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
</head>

<body>
    <form id="form1" name="form1">
        <label for="mack"> Nhap ma ck:</label>
        <input type="text" name="mack" id="mack" required>
        <input type="button" value="Search" name="tim" id="tim">
    </form>
 
    <div id="kq"></div>
    <p><img src="LoaderIcon.gif" id="loaderIcon" style="display:none; " /></p>

    <script type="text/javascript">
        $(document).ready(function(e) {
            $("#tim").click(function() {
                $("#loaderIcon").show();
                $.ajax({
                    type: "POST",
                    url: "process.php",
                    data: "mack=" + $("#mack").val(),
                    success: function(data) {
                        $("#kq").html(data);
                        $("#loaderIcon").hide();
                    }
                });
            });
        });
    </script>
</body>

</html>