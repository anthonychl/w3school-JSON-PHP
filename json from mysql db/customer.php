<html>
<head>
<script type="text/javascript">
function loadJSON(){
    var xmlhttp = new XMLHttpRequest();
    var url = "customer_mysql.php";

    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            myFunction(xmlhttp.responseText);
        }
    }
    xmlhttp.open("GET", url, true);
    xmlhttp.send();

}


function myFunction(response) {
    var arr = JSON.parse(response);
    var i;
    var out = "<table>";

    for(i = 0; i < arr.length; i++) {
        out += "<tr><td>" +
        arr[i].name +
        "</td><td>" +
        arr[i].city +
        "</td><td>" +
        arr[i].country +
        "</td></tr>";
    }
    out += "</table>";
    document.getElementById("id01").innerHTML = out;
}
</script>
</head>
<body>
<hr>
<button type="button" onclick="loadJSON()"> Load from Database</button>
<hr>
<h1>Customers</h1>
<div id="id01" ></div>



</body>
</html>