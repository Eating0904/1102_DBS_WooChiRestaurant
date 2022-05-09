<?php
// $dbhost = 'localhost'; 
// $dbuser = 'wu';
// $dbpass = '0422';
// $dbname = 'woochi';
// $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die('Error with MySQL connection');

    require("show.php");
    $response = [
        "status" => "fail",
    ];
    if(show::customer($u_id)) {
        $response["status"] = "success";
    }
    else {
        $response["error"] = "查無訂單";
    }

    echo json_encode($response);

?>

<!--
<h3> "編輯訂單資訊" </h3>
<form method="post" action="editor_orders.php">
	<input type='text' name='用餐時間' placeholder="用餐時間">
	<input type='text' name='用餐人數' placeholder="用餐人數">
    <input type='text' name='位置區域' placeholder="位置區域">
    <input type='text' name='領養意願' placeholder="領養意願">
    <input type='text' name='備註' placeholder="備註">
	<input type="submit" value="編輯訂單資訊">
</form>
-->
