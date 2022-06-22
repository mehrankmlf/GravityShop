<?php

include "connect.php";

$email = $_REQUEST["email"];
$detail = $_REQUEST["detail"];
$color = $_REQUEST["color"];
$garante = $_REQUEST["garante"];
$count = 1;
$teee = 0;

$query = "SELECT * From tbl_cart WHERE email='$email' AND detail='$detail'";
$result = $connect->prepare($query);
$result->execute();

$row = $result->fetch(PDO::FETCH_ASSOC);

if($row == false){

    //insert to table

    $query2 = "INSERT INTO tbl_cart(email,detail,counter,color,garante) VALUES ('$email','$detail','$count','$color','$garante')";
    $result2 = $connect->prepare($query2);
    $result2->execute();

    echo $count ;
}else{

    $te = $row["counter"];
    $teee = $te + 1;
    $det = $row["detail"];

    $query3 = "UPDATE tbl_cart SET counter = '$teee' WHERE detail='$det'";

    $result3 = $connect->prepare($query3);
    $result3->execute();

    echo $teee;

}

?>