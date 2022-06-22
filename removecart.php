<?php

include "connect.php";


$email = $_POST["email"];
$detail = $_POST["detail"];

$query = "DELETE FROM tbl_cart WHERE email = '$email' AND detail = '$detail'";

$result = $connect->prepare($query);
$result->execute();


?>