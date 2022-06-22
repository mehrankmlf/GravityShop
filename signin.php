<?php

include "connect.php";

$emaill = $_REQUEST["email"];
$passs = $_REQUEST["pass"];

$query = "SELECT * FROM tbl_user WHERE email='$emaill' AND pass='$passs'";

$result = $connect->prepare($query);
$result->execute();

$row = $result->fetch(PDO::FETCH_ASSOC);

if($row == false) {

    echo "fail";
}else {
    echo "success";
}

?>