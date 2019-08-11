<?php
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "w3json");

$result = $conn->query("SELECT name, city, country FROM customer");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {
        $outp .= ",";
        }
    $outp .= '{"name":"'  . $rs["name"] . '",';
    $outp .= '"city":"'   . $rs["city"]        . '",';
    $outp .= '"country":"'. $rs["country"]     . '"}';
}
$outp .="]";

echo ($outp);




?>