<?php
	// $dbhost = 'localhost'; 
	// $dbuser = 'wu';
	// $dbpass = '0422';
	// $dbname = 'woochi';
	// $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die('Error with MySQL connection');
    require("database.php");
    
    $account = $_POST["account"];
    $password = $_POST["password"];
    $name = $_POST["name"]; 
    $tel = $_POST["tel"];
    $mail = $_POST["mail"];
   

    //判斷
    $sql = " select  account from users; ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc( $result );
    if(  $_POST["account"]==row["account"] ){
        $response["status"]="此帳號已建立";
        echo  $response["status"];
    } 

    $insert = "insert into user(account,password,name,tel,mail) 
    VALUES ('$account','$password','$name','$tel','$mail');";
    mysqli_query($conn,$insert);
    
    
    //印出來
?>