<?php
    require("show.php");
    $response = [
        "status" => "fail",
    ];
    $u_id = 1 ;//假設
    $row = show::customer($u_id) ;
    
    print_r($row);
 
    if( $row ) {
        $response["status"] = "success";
        //$response["data"] = $row;
    }
    else {
        $response["error"] = "查無會員";
    }

    echo json_encode($response);
?>