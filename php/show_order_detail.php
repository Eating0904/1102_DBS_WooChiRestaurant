<?php
	require("show.php");
	$response = [
        "status" => "fail",
    ];
    $array=[];
    
    $u_id=2;
    $o_id=1;
    //$u_id=$_SESSION["u_id"];
 
    if( $row=show::customer($u_id) ) {
		$response["data_customer"] = $row ;
    }//會員資料

    if( $row=show::order_detail($o_id,$array) ) {
        $response["status"] = "success";
        $response["data_order"] = $row ;
    }


	header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response,JSON_UNESCAPED_UNICODE);
	
?>