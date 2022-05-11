<?php

require("database.php");
class show {
    static function customer($u_id) {
        
       $sql = " select c_name,c_phone, c_mail, c_points from customer WHERE u_id = '$u_id'; ";
       $result =  database::$conn->query($sql);// or die("select error");
       $row =  $result->fetch_array(MYSQLI_ASSOC);
        //var_dump($row);
       return $row ;
    }
    static function restaurant($u_id) {
        $sql = " SELECT name,mail, phone,location,opening_hour,description FROM restaurant WHERE u_id= '$u_id'; "; 
        $result =  database::$conn->query($sql);
        $row =  $result->fetch_array(MYSQLI_ASSOC);
        
        return $row ;
    }
    static function news($u_id,$array) {
        
        $sql = " SELECT n_information, release_date FROM news WHERE  u_id= '$u_id'; ";
        $result =  database::$conn->query($sql);
       
        while(  $row =  $result->fetch_array(MYSQLI_ASSOC) ){
            $temp=[
                "content" => $row["n_information"],
                "date" => $row["release_date"]
            ];
            array_push($array,$temp); 
        }
       return $array ;
    }
    static function pets($u_id,$array) {
        $sql = "  SELECT p_Name, photo, gender, age, size, variety, p_description, microchip, ligation FROM pets WHERE  u_id= '$u_id'; "; 
        $result =  database::$conn->query($sql);

        while(  $row =  $result->fetch_array(MYSQLI_ASSOC) ){
            $temp=[
                "name" => $row["p_Name"],
                "photo" => $row["photo"],
                "gender" => $row["gender"],
                "age" => $row["age"],
                "size" => $row["size"],
                "variety" => $row["variety"],
                "p_description" => $row["p_description"],
                "microchip" => $row["microchip"],
                "ligation" => $row["ligation"]
            ];
            array_push($array,$temp); 
        }
       return $array ;
    }
    static function menu($array) {
        for($i=1; $i<=3 ;$i++){
            $sql = " SELECT image FROM images WHERE  i_id= '$i'; "; 
            $result =  database::$conn->query($sql);
            $row =  $result->fetch_array(MYSQLI_ASSOC);

            $temp=[
                "image" => $row["image"]
            ];
            array_push($array,$temp); 
        }
        return $array ;
    }
    static function rule($array) {
        for($i=4; $i<=11 ;$i++){
            $sql = " SELECT image FROM images WHERE  i_id= '$i'; "; 
            $result =  database::$conn->query($sql);
            $row =  $result->fetch_array(MYSQLI_ASSOC);
            $temp=[
                "image" => $row["image"]
            ];
            array_push($array,$temp); 
        }
        return $array ;
    }
    static function rate($u_id) {
       
    }
    static function order($u_id) {
       
    }
}

?>