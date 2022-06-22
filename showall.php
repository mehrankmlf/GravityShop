<?php

include "connect.php";

$work=$_GET["work"];

if ($work == "bestsellers") {

    $query3 = "SELECT * FROM tbl_main WHERE kind=3";

    $result3 = $connect->prepare($query3);

    $result3->execute();

    $out3 = array();

    while ($row3 = $result3->fetch(PDO::FETCH_ASSOC)) {

        $record3 = array();

        $record3["img_name"] = $row3["img_name"];

        $record3["name"] = $row3["name"];

        $record3["pre_price"] = $row3["pre_price"];
        
        $record3["detail"] = $row3["detail"];

        array_push($out3, $record3);

    }
    echo json_encode($out3);

}elseif ($work == "newproducts") {

    $query4 = "SELECT * FROM tbl_main WHERE kind=4";

    $result4 = $connect->prepare($query4);

    $result4->execute();

    $out4 = array();

    while ($row4 = $result4->fetch(PDO::FETCH_ASSOC)) {

        $record4 = array();

        $record4["img_name"] = $row4["img_name"];

        $record4["name"] = $row4["name"];

        $record4["pre_price"] = $row4["pre_price"];

        $record4["detail"] = $row4["detail"];
        
        array_push($out4, $record4);

    }
    echo json_encode($out4);
}
?>