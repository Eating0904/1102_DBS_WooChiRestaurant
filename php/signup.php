<?php
	// $dbhost = 'localhost'; 
	// $dbuser = 'wu';
	// $dbpass = '0422';
	// $dbname = 'woochi';
	// $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die('Error with MySQL connection');
    require("user.php");
    $response = [
        "status" => "fail",
    ];

    $account = $_POST["account"];
    $password = $_POST["password"];
    $name = $_POST["name"]; 
    $phone = $_POST["tel"];
    $mail = $_POST["mail"];
    
    //判斷
    $sql = " select  account from users where account = '$account' ; ";
    $result = database::$conn->query($sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    // echo $row["account"] ;
    // echo $account;
    if( !empty($row['account']) ){// == $account  
        $response["error"] = "帳號已建立";  
    }else{
       $r = user::register($account, $password, $name,$phone,$mail) ;
       $response["status"] = "success";
    }
    
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
?>