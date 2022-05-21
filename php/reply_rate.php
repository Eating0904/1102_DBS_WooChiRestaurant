<?php
//店家回覆評論
require("database.php");
$response = [
    "status" => "fail",
];

$content = $_REQUEST["content"];
$r_id = 2 ; //

$sql=" UPDATE rate SET r_reply='$content' WHERE r_id='$r_id';";
$result = database::$conn->query($sql) or die('error with update');

if(!empty($result)){
    $response["status"] = "success";
}

echo json_encode($response,JSON_UNESCAPED_UNICODE);
?>