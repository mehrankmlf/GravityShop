<?php

include "connect.php";

$firstnamee = $_REQUEST["firstname"];
$lastnamee = $_REQUEST["lastname"];
$emaill= $_REQUEST["email"];
$passs = $_REQUEST["pass"];



$query1 = "SELECT * FROM tbl_user WHERE email='$emaill'";
$result1 = $connect->prepare($query1);
$result1->execute();

$row1 = $result1->fetch(PDO::FETCH_ASSOC);

if ($row1 == false){
    
$query = "INSERT INTO tbl_user(firstname,lastname,email,pass) VALUES ('$firstnamee','$lastnamee','$emaill','$passs')";
$result = $connect->prepare($query);
$result->execute(); 
echo "success";

}else{
    echo "fail";
}


?>