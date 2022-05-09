<?php

require("database.php");
class show {
    static function customer($u_id) {
       $sql = " select c_name,c_phone, c_mail, c_points from customer WHERE u_id = '$u_id'; ";
       $result= mysqli_query(database::$conn,$sql) ;
       $result =  database::$conn->query($sql) ;//or die(" error with select" );
       if($result === false){
            echo "DATABASE ERROR: " . mysqli_error(database::$conn) . "<br />\n";
        }
       $row = mysqli_fetch_assoc($result);
       //$row =  $result->fetch_array(MYSQLI_ASSOC);
       print_r($row);
       return $row ;
    }
    static function restaurant($u_id) {
        $sql = " SELECT 'name',mail, phone, 'location',opening_hour, 'description' FROM restaurant WHERE u_id= '$u_id'; "; 
        $result =  database::$conn->query($sql);
        $row =  $result->fetch_array(MYSQLI_ASSOC);
        return $row ;
    }
    static function news($u_id) {
        $sql = " SELECT n_information, release_date FROM news WHERE  u_id= '$u_id'; "; 
        $result =  database::$conn->query($sql);
        $row =  $result->fetch_array(MYSQLI_ASSOC);
        return $row ;
    }
    static function order($u_id) {
        $sql = " SELECT meal_time, num_of_people, seat, adoption, points, note FROM orders WHERE  u_id= '$u_id'; "; 
        $result =  database::$conn->query($sql);
        $row =  $result->fetch_array(MYSQLI_ASSOC);
        return $row ;
    }
    static function pets($u_id) {
        $sql = "  SELECT p_Name, photo, gender, age, size, variety, p_description, microchip, ligation FROM pets WHERE  u_id= '$u_id'; "; 
        $result =  database::$conn->query($sql);
        $row =  $result->fetch_array(MYSQLI_ASSOC);
        return $row ;
    }
    static function rate($u_id) {
        $sql = " SELECT score, r_date, r_content FROM rate WHERE  u_id= '$u_id'; "; 
        $result =  database::$conn->query($sql);
        $row =  $result->fetch_array(MYSQLI_ASSOC);
        return $row ;
    }

}

?>