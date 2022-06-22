<?php


include "connect.php";


$detaill = $_REQUEST["detaill"];

$query = "SELECT * FROM tbl_second_gallery WHERE detail=$detaill";
$result = $connect->prepare($query);
$result->execute();



$row=$result->fetch(PDO::FETCH_ASSOC);

$record["img_name"] = $row["img_name"];



echo json_encode($record);



?>
