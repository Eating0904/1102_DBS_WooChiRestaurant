<?php
<<<<<<< HEAD

	$response = [
        "status" => "fail",
    ];
	
	if(!empty( $_SESSION["id"])){
		$u_id = $_SESSION["id"];
    	$response["u_id"] = $u_id;
	}

	require("openSession.php");
=======
require("openSession.php");
$response = [
	"status" => "fail",
];

if(!empty($_SESSION["id"])){
	$u_id = $_SESSION["id"];
	$response["u_id"] = $u_id;
	$response["status"] = "success";
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);

// $_POST["u_id"];
	
>>>>>>> 70e831fe5562d80e0ad851af8e1ce95e916f48f7
?>
