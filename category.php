<?php

include "connect.php";

$work = $_GET["workk"];

if($work == "digital") {

    $query = "SELECT * FROM tbl_category_digital";

    $result = $connect->prepare($query);

    $result->execute();

    $digital = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

        $record = array();
        $record["title"] = $row["title"];
        $record["img_name"] = $row["img_name"];
        $record["detail"] = $row["detail"];
        array_push($digital, $record);

    }


    echo json_encode($digital);


}else if($work == "beauty") {

    $query1 = "SELECT * FROM tbl_category_beauty";

    $result1 = $connect->prepare($query1);

    $result1->execute();

    $beauty = array();

    while ($row1 = $result1->fetch(PDO::FETCH_ASSOC)) {

        $record1 = array();
        $record1["title"] = $row1["title"];
        $record1["img_name"] = $row1["img_name"];

        array_push($beauty, $record1);


    }

    echo json_encode($beauty);


}else if($work == "book") {

    $query2 = "SELECT * FROM tbl_categotry_book";

    $result2 = $connect->prepare($query2);

    $result2->execute();

    $book = array();

    while ($row2 = $result2->fetch(PDO::FETCH_ASSOC)) {

        $record2 = array();
        $record2["title"] = $row2["title"];
        $record2["img_name"] = $row2["img_name"];

        array_push($book, $record2);


    }

    echo json_encode($book);


}else if($work == "home") {

    $query3 = "SELECT * FROM tbl_category_home";

    $result3 = $connect->prepare($query3);

    $result3->execute();

    $home = array();

    while ($row3 = $result3->fetch(PDO::FETCH_ASSOC)) {

        $record3 = array();
        $record3["title"] = $row3["title"];
        $record3["img_name"] = $row3["img_name"];

        array_push($home, $record3);


    }

    echo json_encode($home);



}else if($work == "fashion") {


    $query4 = "SELECT * FROM tbl_category_fashion";

    $result4 = $connect->prepare($query4);

    $result4->execute();

    $fashion = array();

    while ($row4 = $result4->fetch(PDO::FETCH_ASSOC)) {

        $record4 = array();
        $record4["title"] = $row4["title"];
        $record4["img_name"] = $row4["img_name"];

        array_push($fashion, $record4);


    }

    echo json_encode($fashion);


}else if($work == "transport") {

    $query5 = "SELECT * FROM tbl_category_transport";

    $result5 = $connect->prepare($query5);

    $result5->execute();

    $transport = array();

    while ($row5 = $result5->fetch(PDO::FETCH_ASSOC)) {

        $record5 = array();
        $record5["title"] = $row5["title"];
        $record5["img_name"] = $row5["img_name"];

        array_push($transport, $record5);


    }

    echo json_encode($transport);


}


?>