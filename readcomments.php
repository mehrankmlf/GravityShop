<?php

include "connect.php";

$detail = $_REQUEST["detail"];


$query = "SELECT * FROM tbl_comments WHERE detail = '$detail' AND confirm = 1 AND title != ''";
$result = $connect->prepare($query);
$result->execute();

    $all = array();
    $title = array();
    $letter = array();
    $positive = array();
    $negative = array();
    $like = array();
    $dislike = array();
    $user_id = array();
    $param_rate = array();


    $email = array();
    

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

        $title[] = $row["title"];
        $letter[] = $row["letter"];
        $positive[] = $row["positive"];
        $negative[] = $row["negative"];
        $like[] = $row["likee"];
        $dislike[] = $row["dislike"];
        $user_id[] = $row["user_id"];
        $param_rate[] = unserialize($row["param"]);
    }
    
    foreach ($user_id as $key=>$value){
        $query2 = "SELECT * FROM tbl_user WHERE id = '$value'";
        $result2 = $connect->prepare($query2);
        $result2->execute();
            
            while($row2 = $result2->fetch(PDO::FETCH_ASSOC)){
                
                $email[] = $row2 ["email"];
            }
        
    }
    
    
        $query3 = "SELECT * FROM tbl_main WHERE detail = '$detail'";
        $result3 = $connect->prepare($query3);
        $result3->execute();
        $row3 = $result3->fetch(PDO::FETCH_ASSOC);
        $cat = $row3["category"];
        
        
        $query4 = "SELECT * FROM tbl_param WHERE product_cat = '$cat'";
        $result4 = $connect->prepare($query4);
        $result4->execute();
        
        while($row4 = $result4->fetch(PDO::FETCH_ASSOC)) {
            
            $param[] = $row4["title"];
        }
        
    
    $all["title"] = $title;
    $all["letter"] = $letter;
    $all["positive"] = $positive;
    $all["negative"] = $negative;
    $all["likee"] = $like;
    $all["dislike"] = $dislike;
    $all["email"] = $email;
    $all["param"] = $param;
    $all["param_rate"] = $param_rate;

    echo json_encode($all);

?>