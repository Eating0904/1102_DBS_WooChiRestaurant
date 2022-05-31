<?php

require("database.php");
require("openSession.php");
$response = [
    "status" => "success"
];

$u_id = $_SESSION["u_id"];
$nmae = $_POST["name"];
$mail = $_POST["mail"];
$location = $_POST["location"];
$hour = $_POST["hour"];
$desc = $_POST["desc"];

if($u_id==1){
    $sql=" UPDATE restaurant SET name='$name',mail='$mail',phone='$mail',location='$location',opening_hour='$hour',description='$desc' WHERE $u_id=1; ";
    $result =  database::$conn->query($sql);// or die("select error");
    if( $result ) $response["status"] = "success";

}


header('Content-Type: application/json; charset=utf-8');
echo json_encode($response, JSON_UNESCAPED_UNICODE);


