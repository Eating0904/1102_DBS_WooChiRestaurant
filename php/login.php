<?php
    //  $dbhost = '127.0.0.1';
    //  $dbuser = 'wuwuwu';
    //  $dbpass = '0422';
    //  $dbname = 'woochi';
    //  $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');

    require("user.php");
    $response = [
        "status" => "fail",
    ];

    if (user::login($_POST["account"], $_POST["password"])) {
        $response["status"] = "success";
    }
    else {
        $response["error"] = "帳號或密碼錯誤";
    }
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);

?>