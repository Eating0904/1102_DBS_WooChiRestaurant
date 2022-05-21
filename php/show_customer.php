<?php
    require("show.php");
    session_start();
    $u_id = $_SESSION["id"];
    $response = [
        "status" => "fail",
    ];
    if( $row=show::customer($u_id) ) {
        $response["status"] = "success";
		$response["data"] = $row ;
    }
    else {
        $response["error"] = "查無會員";
    }
	//print_r($row);
	header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response,JSON_UNESCAPED_UNICODE);


?>