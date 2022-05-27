<?php

require("database.php");
$response = [
    "status" => "success"
];

//$u_id = $_SESSION["u_id"];
$u_id=2;

$name = $_REQUEST["name"];
$phone = $_REQUEST["phone"];
$mail = $_REQUEST["mail"];

// echo $name."<br>".$phone."<br>".$mail ;

if($u_id!=1){
    $sql=" UPDATE customer SET c_name='$name',
    c_phone='$phone',c_mail='$mail' WHERE u_id='$u_id';" ;
    $result =  database::$conn->query($sql);//or die("select error");
    //if( $result ) $response["status"] = "success";

}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($response, JSON_UNESCAPED_UNICODE);


