<?php

include "connect.php";

$email = $_REQUEST["email"];
//$email = "cc@cc.cc";
$record = array();
$all = array();

$query = "SELECT * FROM tbl_cart WHERE email = '$email'";
$result = $connect->prepare($query);
$result->execute();

while($row = $result -> fetch(PDO::FETCH_ASSOC)) {

    $record["counter"] = $row["counter"];
    $record["color"] = $row["color"];
    $record["garante"] = $row["garante"];

    $detail = $row["detail"];
    $record["detail"] = $row["detail"];
    //name query

    $query2 = "SELECT * FROM tbl_main WHERE detail = '$detail'";
    $result2 = $connect->prepare($query2);
    $result2->execute();
    $row2 = $result2 -> fetch(PDO::FETCH_ASSOC);

    $record["name"] = $row2["name"];
    $record["pre_price"] = $row2["pre_price"];



    //pic query

    $query3 = "SELECT * FROM tbl_second_gallery WHERE detail = '$detail'";
    $result3 = $connect->prepare($query3);
    $result3->execute();
    $row3 = $result3->fetch(PDO::FETCH_ASSOC);

    $record["img_name"] = $row3["img_name"];
    
    array_push($all,$record);
}

echo json_encode($all);

?>
