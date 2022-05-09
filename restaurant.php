<?php
    // $dbhost = 'localhost'; 
	// $dbuser = 'Day0501';
	// $dbpass = '0501';
	// $dbname = 'test';
	// $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die('Error with MySQL connection');
	require("show.php");
    $response = [
        "status" => "fail",
    ];
    if(show::restaurant($_POST["account"], $_POST["password"])) {
        $response["status"] = "success";
    }
    else {
        $response["error"] = "查無店家資料";
    }

    echo json_encode($response);
	
	/*
	$sql = "SELECT mail,phone FROM restaurant";
	$result = mysqli_query($conn,$sql); // or die('Error with select from restaurant');

	$row = mysqli_fetch_($result);
	printf($row["mail"],$row["phone"]);
    */
	/*
	$result = $conn->query("SELECT mail,phone FROM restaurant;");
	if (!$result) {
		die($conn->error);
	}

	$row = $result->fetch_assoc();
	print_r($row);
	echo '<br> now: ' . $row['n'];
	*/
?>
<!--
	<h3> "編輯店家資料" </h3>
	<form method="post" action="editor_manage.php">
		<input type='text' name='name' placeholder="店家名字">
		<input type='text' name='mail' placeholder="店家郵件">
		<input type='text' name='phone' placeholder="店家電話">
		<input type='text' name='location' placeholder="店家地址">
		<input type='text' name='opening_hour' placeholder="店家營業時間">
		<input type='text' name='description' placeholder="店家描述">
		<input type="submit" value="編輯店家資料">
	</form>
-->	
