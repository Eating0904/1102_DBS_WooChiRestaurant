<?php

require("database.php");
class user {
    static function isValid($account, $password) {
        $hashPassword = hash("sha256", $password);
        $select = "SELECT password FROM users WHERE account = '$account' ; ";
        $result = database::$conn->query($select);
        while ($row = $result->fetch_array(MYSQLI_ASSOC)){
            if ($row["password"] === $hashPassword) {
                return true;
            }
            break;
        }
        return false;
    }
    static function createsession($data) {
        session_start();
        foreach ($data as $key => $val) {
            $_SESSION[$key] = $val;
        }
    }
    static function createcookie($data) {
        foreach ($data as $key => $val) {
            setcookie($key, $val, time()+60*5, "/", "", 0);
        }
    }
    static function login($account, $password) {
        if (self::isValid($account, $password)) {
            $select = "SELECT u_id FROM users WHERE account='$account'; ";
            $result =  database::$conn->query($select)   ;
            $data = [];
            $token = bin2hex(random_bytes(16));  # 32 bits
            while ($row = $result->fetch_array(MYSQLI_ASSOC)){// mysqli_fetch_assoc($result)
                $data["id"] = $row["u_id"];
                $data["token"] = $token;
                self::createsession($data);
                self::createcookie($data);
                return true;
            }
        }
        return false;
    }
    static function logout() {
        if (isset($_SERVER['HTTP_REFERER'])) {
            foreach ($_COOKIE as $key=>$value) {
                setcookie($key, "", time()-3600, "/", "", 0);
            }
            header("Location: " . $_SERVER['HTTP_REFERER']);//可以获取当前链接的上一个连接的来源地址
            exit();
        }
        else {
            header("Location: ./");
        }
    }
    static function check() {
        session_start();
        if (!empty($_COOKIE["token"])) {
            if (!empty($_SESSION["token"]) && $_SESSION["token"]===$_COOKIE["token"]) {
                return true;
            }
        }
        return false;
    }

}

?>