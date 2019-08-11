<?php
header("Content-Type: application/json; charset=UTF-8");

mysql_connect('localhost','root','');
mysql_select_db('w3json');

$query = "SELECT name, city, country FROM customer";
$query_run = mysql_query($query);


$outp = "[";
while($rs = mysql_fetch_assoc($query_run)) {
    if ($outp != "[") {
        $outp .= ",";
        }
    $outp .= '{"name":"'  . $rs["name"] . '",';
    $outp .= '"city":"'   . $rs["city"]        . '",';
    $outp .= '"country":"'. $rs["country"]     . '"}';
}
$outp .="]";

echo $outp;




?>