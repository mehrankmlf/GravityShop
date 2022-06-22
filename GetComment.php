<?php

include "connect.php";

$email = $_REQUEST["email"];

$title = $_REQUEST["title"];

$positive = $_REQUEST["positive"];

$negative = $_REQUEST["negative"];

$content = $_REQUEST["content"];

$detail = $_REQUEST["detail"];

$email = $_REQUEST["email"];

$param = $_REQUEST["param"];

//serial param like 1,2,3,4


$ser = (explode(",",$param));
$seri = serialize($ser);

$query = "SELECT * FROM tbl_user WHERE email = '$email'";
$result = $connect->prepare($query);
$result->execute();

$row = $result->fetch(PDO::FETCH_ASSOC);

$id_user = $row["id"];

$first_confirm = 0;

$query2 = "INSERT INTO tbl_comments(title,negative,positive,detail,letter,param,user_id,confirm) VALUES ('$title','$negative','$positive','$detail','$content','$seri','$id_user','$first_confirm')";
$result2 = $connect->prepare($query2);
$result2->execute(); 



?>