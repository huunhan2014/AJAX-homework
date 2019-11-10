var req;
function loadXMLDoc(str) {
    var url = "process.php";
    url = url + "?u=" + str;

    if (window.XMLHttpRequest) {
        req = new XMLHttpRequest();
        req.onreadystatechange = processReqChange;
        req.open("GET", url, true);
        req.send(null);

    }
    else if (window.ActiveXObject) {
        req = new ActiveXObject("Microsoft.XMLHTTP");
        if (req) {
            req.onreadystatechange = processReqChange;
            req.open("GET", url, true);
            req.send();
        }
    }
}
function processReqChange() {
    if (req.readyState == 4) {
        if (req.status == 200) {
            if (req.responseText == "rong") {
                document.getElementById("tb").innerHTML = "<sup id='sup1'>Username ko dc de trong</sup>";
                document.getElementById("bdangky").disabled = true;

            }
            else if (req.responseText == "co") {
                document.getElementById("tb").innerHTML = "<sup id='sup2'>User da co, chon user khac</sup>";
                document.getElementById("bdangky").disabled = true;

            } else {
                document.getElementById("tb").innerHTML = "<sup id='sup3'>Ban co the dk = user nay</sup>";
                document.getElementById("bdangky").disabled = false;

            }

            // switch (req.responseText) {
            //     case "rong":
            //         document.getElementById("tb").innerHTML = "<sup id='sup1'>Username ko dc de trong</sup>";
            //         document.getElementById("bdangky").disabled = true;
            //         break;
            //     case "co":
            //         document.getElementById("tb").innerHTML = "<sup id='sup2'>User da co, chon user khac</sup>";
            //         document.getElementById("bdangky").disabled = true;
            //         break;
            //     default:
            //         document.getElementById("tb").innerHTML = "<sup id='sup3'>Ban co the dk = user nay</sup>";
            //         document.getElementById("bdangky").disabled = false;
            //         break;
            // }

        }
        else {
            alert("Loi ket noi hoac truy van");
        }
    }
}