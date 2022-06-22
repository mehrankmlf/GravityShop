<?php

include "connect.php";

$detaill = $_REQUEST["detaill"];

$query = "SELECT * FROM tbl_explain WHERE detail=$detaill";
$result = $connect->prepare($query);
$result->execute();


$row = $result->fetch(PDO::FETCH_ASSOC);

$record = array();
$record["explainn"] = $row["explainn"];
$record["garante"] = $row["garante"];
$record["color"] = $row["color"];

$record["seller"] = $row["seller"];

/////////////////////////////////////

$query1 = "SELECT * FROM tbl_main WHERE detail=$detaill";
$result1 = $connect->prepare($query1);
$result1->execute();
$row1 = $result1->fetch(PDO::FETCH_ASSOC);
$record["inventory"] = $row1["inventory"];

echo json_encode($record);
?>