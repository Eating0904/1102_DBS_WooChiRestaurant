<?php
    require("show.php");
    $response = [
        "status" => "fail",
    ];
    if(show::customer($u_id)) {
        $response["status"] = "success";
    }
    else {
        $response["error"] = "查無會員";
    }

    echo json_encode($response);

?>
