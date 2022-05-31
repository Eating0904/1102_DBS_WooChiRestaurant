<?php

<<<<<<< HEAD
	$response = [
        "status" => "fail",
    ];
	
	if(!empty( $_SESSION["id"])){
		$u_id = $_SESSION["id"];
    	$response["u_id"] = $u_id;
	}
=======
require("openSession.php");
>>>>>>> 2fd74e1a6f2dac3fa632688ee6dc2b3549c1ea76

$response = [
	"status" => "fail",
];
if(!empty( $_SESSION["id"])){
	$u_id = $_SESSION["id"];
	$response["u_id"] = $u_id;
}

echo json_encode($response);

// $_POST["u_id"];
	
?>
