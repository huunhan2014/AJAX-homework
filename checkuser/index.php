<?php require_once "class.php";
$t = new testClass;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Check Users</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
    <!-- <script type="text/javascript" src="script.js"></script> -->

</head>

<body>

    <div>
        <form id="form1" name="form1" method="post" action="">
            <table width="500" border="1" cellspacing="0" cellpadding="4" align="center">
                <caption>
                    Đăng ký thành viên
                </caption>
                <tbody>

                    <tr>
                        <td>Users</td>
                        <td><input type="text" name="textfied" id="username" onfocus="setfocus()">
                            <br>
                            <b id="tb"></b>
                        </td>
                    </tr>
                    <tr>
                        <td>Pass</td>
                        <td><input type="password" name="textfied2" id="pass"></td>
                    </tr>
                    <tr>
                        <td>repass</td>
                        <td><input type="password" name="textfied3" id="repass"></td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center">

                            <input type="submit" id="bdangky" name="bdangky" value="Đăng ký" disabled="disabled">
                            <input type="reset" value="Làm Lại" id="xoa">

                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

    </div>

    <script language="javascript">
        function setfocus() {
            document.getElementById("bdangky").disabled = true;
            document.getElementById("tb").innerHTML = "";
        }

        $(document).ready(function() {
            $('#username').blur(function() {
                $.get(
                    "process.php",
                    // "u=" + $(this).val(),
                    {
                        u: $(this).val(),
                    },
                    function(data,status,xhr) {
                        if (data == 'rong') {
                            $('#tb').html("<sup id='sup1'>Username ko dc de trong</sup>");
                            $('#bdangky').prop('disabled', true);
                        } else if (data == 'co') {
                            $('#tb').html("<sup id='sup2'>User da co, chon user khac</sup>");
                            $('#bdangky').prop('disabled', true);

                        } else {
                            $('#tb').html("<sup id='sup3'>Ban co the dk = user nay</sup>");
                            $('#bdangky').prop('disabled', false);

                        }

                    }); //$.get
            });
        });
    </script>
</body>

</html>