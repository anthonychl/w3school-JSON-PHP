<html>
<head>
<style>

h1 {
    border-bottom: 3px solid #cc9900;
    color: #996600;
    font-size: 30px;
}
table, th , td {
    border: 1px solid grey;
    border-collapse: collapse;
    padding: 5px;
}
table tr:nth-child(odd) {
    background-color: #f1f1f1;
}
table tr:nth-child(even) {
    background-color: #ffffff;
}

</style>
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