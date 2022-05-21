<?php
    require("show.php");
    $u_id = 2 ;//假設
    //$u_id=$_SESSION["u_id"];
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