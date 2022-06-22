<?php

include "connect.php";

$sort = $_REQUEST["sort"];
$collection = $_REQUEST["witchco"] + 2;
//$sort = "desc";
//$collection = 4;
if ($sort == "asc") {
       $query = "SELECT * FROM tbl_main WHERE kind = '$collection' ORDER BY pre_price ASC";
        $result = $connect->prepare($query);
        $result->execute();
        
        $out = array();
        
         while($row = $result->fetch(PDO::FETCH_ASSOC)){
             
        $record = array();

        $record["img_name"] = $row["img_name"];

        $record["name"] = $row["name"];

        

        $record["pre_price"] = $row["pre_price"];
        
        $record["detail"] = $row["detail"];

        array_push($out,$record);
        
         }
    echo json_encode($out);
    
}else if ($sort == "desc") {
           $query1 = "SELECT * FROM tbl_main WHERE kind = '$collection' ORDER BY pre_price DESC";
        $result1 = $connect->prepare($query1);
        $result1->execute();
        
        $out1 = array();
        
         while($row1 = $result1->fetch(PDO::FETCH_ASSOC)){
             
        $record1 = array();

        $record1["img_name"] = $row1["img_name"];

        $record1["name"] = $row1["name"];

        

        $record1["pre_price"] = $row1["pre_price"];
        
        $record1["detail"] = $row1["detail"];

        array_push($out1,$record1);
        
         }
    echo json_encode($out1);
    
}else if ($sort == "best") {
    
    
    
}else if ($sort == "enjoy"){
    
    
    
}


?>