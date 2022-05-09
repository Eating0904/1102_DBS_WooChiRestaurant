<?php

    require("show.php");
    $response = [
        "status" => "fail",
    ];
    if(show::customer($u_id)) {
        $response["status"] = "success";
    }
    else {
        $response["error"] = "cannt find news";
    }

    echo json_encode($response);

?>

