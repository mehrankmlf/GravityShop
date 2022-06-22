<?php

include "connect.php";

$email = $_REQUEST["email"];


$query = "SELECT * FROM tbl_cart WHERE email = '$email'";
$result = $connect->prepare($query);
$result->execute();


    $detail = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

        $detail = array();
        $record[] = $row["detail"];
        $cont[] = $row["counter"];
      
    }
    



   // echo json_encode($record);
   
       //////////////////////////////////////////////// 
       if($cont){
       foreach ($cont as $key=>$value) {
           
           foreach ($record as $key=>$attr) {
               $query5 = "UPDATE tbl_main SET inventory = inventory - $value WHERE detail = $attr";
               $result5 = $connect->prepare($query5);
                $result5->execute();
           }
       }
       }
       
           ////////////////////////////////////////////////
   if($record) {
   foreach($record as $key=>$value){
       
   $query2 = "INSERT INTO tbl_endbuy(email,detail) VALUES ('$email','$value')";
   $result2 = $connect->prepare($query2);
   $result2->execute();
   }
   }
   $query3 = "DELETE FROM tbl_cart WHERE email = '$email'";
    $result3 = $connect->prepare($query3);
    $result3->execute();

?>