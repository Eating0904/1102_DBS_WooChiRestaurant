<?php 

require("database.php");
$response = [
    "status" => "fail"
];

// !empty($_REQUEST["name"]) && !empty($_REQUEST["phone"])&& 
//     !empty($_REQUEST["email"])&& !empty($_REQUEST["start"]) && 
//     !empty($_REQUEST["time"]) && !empty($_REQUEST["people"])&& 
//     !empty($_REQUEST["adopt"])&& !empty($_REQUEST["note"])
if(
    !empty($_POST["time"]) && !empty($_POST["people"])&& 
    !empty($_POST["seat"])&&
    !empty($_POST["adopt"])&& !empty($_POST["note"])
) {
    // $name = $_REQUEST["name"];
    // $phone = $_REQUEST["phone"];
    // $email = $_REQUEST["email"];
    // $start = $_REQUEST["start"];
    // $time = $_REQUEST["time"];
    // $people = $_REQUEST["people"];
    // $adopt = $_REQUEST["adopt"];
    // $note = $_REQUEST["note"];

    //$u_id = $_SESSION["id"]; 
    $u_id =2;
    $time = $_POST["time"];
    $people = $_POST["people"];
    $seat = $_POST["seat"];
    $adopt = $_POST["adopt"];
    $note = $_POST["note"];
  
    $sql = "INSERT INTO orders
        (u_id, meal_time, num_of_people, seat, adoption, note) 
        VALUES
        ('$u_id', '$time', '$people', '$seat', '$adopt', '$note')";
    $result = database::$conn->query($sql);
    if ($result) {
        $response["status"] = "success";
    }
    else{
        $response["error"] = mysqli_error(database::$conn);
    }
}
else {
    $response["error"] = "有資料為空";
}


header('Content-Type: application/json; charset=utf-8');
echo json_encode($response, JSON_UNESCAPED_UNICODE);

