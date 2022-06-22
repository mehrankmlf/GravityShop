<?php

include "connect.php";

$detaill = $_REQUEST["detaill"];

$query = "SELECT * FROM tbl_explain WHERE detail=$detaill";
$result = $connect->prepare($query);
$result->execute();

$explains = array();

while($row = $result->fetch(PDO::FETCH_ASSOC)){

    $record = array();
    $record["explainn"] = $row["explainn"];
    $record["garante"] = $row["garante"];
    $record["color"] = $row["color"];

    $record["seller"] = $row["seller"];

    array_push($explains,$record);
}

    echo json_encode($explains);


?>