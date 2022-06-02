<?php
    require("show.php");
    $response = [
        "status" => "fail",
    ];
    $array=[];

    // $content = $_REQUEST["content"];
    $content = $_POST["content"];
    if( $row=show::order_detail($content,$array) )	{
        $response["status"] = "success";
        $response["data_order"] = $row ;
        $response["type"] = "ID";
    }

    $sql_1 = " SELECT u_id,c_name FROM customer WHERE c_name='$content'; ";
    $result_1 =  database::$conn->query($sql_1);
    
    if( $row_1 =  $result_1->fetch_array(MYSQLI_ASSOC) ){
        $u_id = $row_1["u_id"];
        $c_name = $row_1["c_name"];

        $sql_2 = " SELECT o_id,meal_time FROM  orders WHERE u_id = '$u_id'order by meal_time DESC; ";
        $result_2 =  database::$conn->query($sql_2);
        

        while( $row_2 =  $result_2->fetch_array(MYSQLI_ASSOC) ){

            $temp=[
                "o_id" => $row_2["o_id"],
                "meal_time" => $row_2["meal_time"],
                "name" => $c_name,
            ];

            array_push($array,$temp); 
            
            $response["status"] = "success";
            $response["data_order"] = $array ;
            $response["type"] = "name";
        }
        
    }

    $sql_3 = " SELECT o_id,meal_time,u_id from orders  Where date_format(meal_time,'%Y-%m-%d')='$content' ; ";
    $result_3 =  database::$conn->query($sql_3) or die("error");
    
    while( $row_3 = $result_3->fetch_array(MYSQLI_ASSOC) ){
        $u_id = $row_3["u_id"];
        
        $sql_4 = " SELECT c_name FROM customer WHERE u_id='$u_id'; ";
        $result_4 = database::$conn->query($sql_4) or die("error4");
        $row_4 =  $result_4->fetch_array(MYSQLI_ASSOC);
        $c_name = $row_4["c_name"];
        
        
        $temp=[
            "o_id" => $row_3["o_id"],
            "meal_time" => $row_3["meal_time"],
            "name" => $c_name,
        ];
        array_push($array,$temp);

        $response["status"] = "success";
        $response["data_order"] = $array ;
        $response["type"] = "date";
    }

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response,JSON_UNESCAPED_UNICODE);
?>

    