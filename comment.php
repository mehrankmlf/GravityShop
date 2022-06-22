<?php

include "connect.php";

$detail = $_REQUEST["detail"];

$query = "SELECT * FROM tbl_main WHERE detail = '$detail'";
$result = $connect->prepare($query);
$result->execute();

$row = $result->fetch(PDO::FETCH_ASSOC);

$cat = $row["category"];

$query2 = "SELECT * FROM tbl_param WHERE product_cat='$cat'";
$result2 = $connect->prepare($query2);
$result2->execute();

$cats = array();

while($row2 = $result2->fetch(PDO::FETCH_ASSOC)){

    $record = array();
    $record["title"] = $row2["title"];


    array_push($cats,$record);
}

    echo json_encode($cats);

?>