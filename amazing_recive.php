<?php

include "connect.php";

$detaill = $_REQUEST["detaill"];

$query = "SELECT * FROM tbl_gallery WHERE detail=$detaill";
$result = $connect->prepare($query);
$result->execute();

$pics = array();

while($row = $result->fetch(PDO::FETCH_ASSOC)){

    $record = array();
    $record["img_name"] = $row["img_name"];

    array_push($pics,$record);
}

    echo json_encode($pics);


?>