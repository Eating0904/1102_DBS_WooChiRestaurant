<?php
	require("show.php");
	$response = [
        "status" => "fail",
    ];
    $array=[];
    
    $u_id=2;
    //$u_id=$_SESSION["u_id"];
 
    if( $row=show::customer($u_id) ) {
		$response["data_customer"] = $row ;
    }//會員資料

    if( $row=show::order($u_id,$array) ) {
        $response["status"] = "success";
        $response["data_order"] = $row ;
    }
    else {
        $response["error"] = "查無訂單";
    }

	header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response,JSON_UNESCAPED_UNICODE);
	
?>
