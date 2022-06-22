<?php


include "connect.php";





    $query = "SELECT * FROM tbl_category";

    $result = $connect->prepare($query);

    $result->execute();

    $category = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

        $record = array();
        $record["title"] = $row["title"];
        $record["img_name"] = $row["img_name"];
        $record["cat"] = $row["cat"];
        
        $record["detaill"] = $row["detaill"];

        array_push($category, $record);

    }


    echo json_encode($category);


?>