<?php
	require("show.php");
	
	$response = [
        "status" => "fail",
    ];
    $array=[];
    

    if( $row=show::rule($array) ) {
        $response["status"] = "success";
        $response["data"] = $row ;
    }
    else {
        $response["error"] = "查無店內守則";
    }
	//print_r($row);
	header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response,JSON_UNESCAPED_UNICODE);
	
?>
