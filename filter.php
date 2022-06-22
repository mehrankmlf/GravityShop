<?php

include "connect.php";

$filter = $_REQUEST["filter"];
//$filter = "قرمز";

$collection = $_REQUEST["witchco"] + 2;
//$collection = 3;
$switchState = $_REQUEST["switchstate"];
//$switchState = 0;

if ($filter == "کمتر از ۱۰۰"){
    
    if ($switchState == 0) {
                $query = "SELECT * FROM tbl_main WHERE kind = '$collection' AND pre_price < 100000";
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
        
    }else {
                $query = "SELECT * FROM tbl_main WHERE kind = '$collection' AND pre_price < 100000 AND inventory > 0";
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
    
        
    }
    
    
    
    
    

    
}else if ($filter == "بیشتر از ۱۰۰"){
    
    
    if ($switchState == 0) {
            $query1 = "SELECT * FROM tbl_main WHERE kind = '$collection' AND pre_price > 100000";
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
        
    }else {
            $query1 = "SELECT * FROM tbl_main WHERE kind = '$collection' AND pre_price > 100000 AND inventory > 0";
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
        
    }
    

   
}else {
    
      if ($switchState == 0) {
              $query2 = "SELECT * FROM tbl_color WHERE color = '$filter'";
    $result2 = $connect->prepare($query2);
    $result2->execute();
    
    $row2 = $result2->fetch(PDO::FETCH_ASSOC);
    
    $color_id = $row2["id"];
    
   ///////////////////////////////////////
   
    $query3 = "SELECT * FROM tbl_main WHERE kind = '$collection' AND color_id = '$color_id'";
    $result3 = $connect->prepare($query3);
    $result3->execute();
    
    
        $out3 = array();

    while($row3 = $result3->fetch(PDO::FETCH_ASSOC)){

        $record3 = array();

        $record3["img_name"] = $row3["img_name"];

        $record3["name"] = $row3["name"];

        

        $record3["pre_price"] = $row3["pre_price"];
        
        $record3["detail"] = $row3["detail"];

        array_push($out3,$record3);


    }

    echo json_encode($out3);
          
      }else {
              $query2 = "SELECT * FROM tbl_color WHERE color = '$filter'";
    $result2 = $connect->prepare($query2);
    $result2->execute();
    
    $row2 = $result2->fetch(PDO::FETCH_ASSOC);
    
    $color_id = $row2["id"];
    
   ///////////////////////////////////////
   
    $query3 = "SELECT * FROM tbl_main WHERE kind = '$collection' AND color_id = '$color_id' AND inventory > 0";
    $result3 = $connect->prepare($query3);
    $result3->execute();
    
    
        $out3 = array();

    while($row3 = $result3->fetch(PDO::FETCH_ASSOC)){

        $record3 = array();

        $record3["img_name"] = $row3["img_name"];

        $record3["name"] = $row3["name"];

        

        $record3["pre_price"] = $row3["pre_price"];
        
        $record3["detail"] = $row3["detail"];

        array_push($out3,$record3);


    }

    echo json_encode($out3);
      }
    

    
}


?>