<?php
    require("show.php");
    $response = [
        "status" => "fail",
    ];
    $array=[];

    $content = $_REQUEST["content"];
    
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

        $sql_2 = " SELECT o_id,meal_time FROM  orders WHERE u_id = '$u_id'; ";
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
 
   
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response,JSON_UNESCAPED_UNICODE);
?>

    