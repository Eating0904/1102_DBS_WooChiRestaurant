<?php

	$response = [
        "status" => "fail",
    ];
	
	if(!empty( $_SESSION["id"])){
		$u_id = $_SESSION["id"];
    	$response["u_id"] = $u_id;
	}

	require("openSession.php");
?>
