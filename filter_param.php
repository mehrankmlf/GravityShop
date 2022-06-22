<?php

include "connect.php";

$collection = $_REQUEST["WitchCollection"];

$all = array();

if ($collection == 1) {
    //best seller
    $query = "SELECT * FROM tbl_filter_param WHERE product_kind = 3";
    $result = $connect->prepare($query);
    $result->execute();
    
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        
    $filter = array();
    $filter["title"] = $row["title"];
    
    array_push($all,$filter);
    }
    
}else if ($collection == 2) {
    //new
        $query2 = "SELECT * FROM tbl_filter_param WHERE product_kind = 4";
    $result2 = $connect->prepare($query2);
    $result2->execute();
    
    while ($row2 = $result2->fetch(PDO::FETCH_ASSOC)) {
        
    $filter2 = array();
    $filter2["title"] = $row2["title"];
    
    array_push($all,$filter2);
    }
}

echo json_encode($all);

?>