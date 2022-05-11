<?php
    $u_id=1;
    require("show.php");
    $response = [
        "status" => "fail",
    ];

    $array = [] ;
    $row=show::news($u_id,$array);

    //print_r($row);
    if( $row ) {
        $response["status"] = "success";
        $response["data"] = $row ;
    }
    else {
        $response["error"] = "cannt find news";
    }
    
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response, JSON_UNESCAPED_UNICODE);
    //print_r($row);
?>

