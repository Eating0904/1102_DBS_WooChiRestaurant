<?php
//會員新增評論
require("database.php");
$response = [
    "status" => "fail",
];

$star = $_POST["star"];
$content = $_POST["content"];
$date = date('Y-m-d');
//$u_id = $_SESSION["id"]; 
$u_id = 2 ; 

$sql=" insert into rate(u_id,score,r_date,r_content)values('$u_id','$star','$date','$content');";
$result = database::$conn->query($sql) or die('error with insert');

if(!empty($result)){
    $response["status"] = "success";
}

echo json_encode($response,JSON_UNESCAPED_UNICODE);
?>