<!-- <a href = "index.php"> 回主畫面</a> <p> -->
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
        $response["error"] = "error with account or password";
    }
    echo json_encode($response);

    
?>