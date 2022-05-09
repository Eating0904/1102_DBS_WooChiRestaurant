<?php
class database {
    public static $conn;
    static function conn() {
        $dbhost = '127.0.0.1';
        $dbuser = 'wuwuwu';
        $dbpass = '0422';
        $dbname = 'woochi';
        self::$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
        // self::$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        // self::$conn->query("SET NAMES 'utf8'");
    }
}
database::conn();
?>