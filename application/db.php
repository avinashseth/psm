<?php
    require_once("constants.php");
    // c://xampp/htdocs/psm/application/ __DIR__
    // c://xampp/htdocs/psm "/../"
    // c://xampp/htdocs/psm/vendor/autoload.php "/vendor/autoload.php"
    require_once(__DIR__ . '/../vendor/autoload.php');
    $database = new medoo([
        // required
        'database_type' => 'mysql',
        'database_name' => 'a_pet_social_media',
        'server' => 'localhost',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        // [optional]
        'port' => 3306,
        // [optional] Table prefix
        'prefix' => '',
        // driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
        'option' => [
            PDO::ATTR_CASE => PDO::CASE_NATURAL
        ]
    ]);

    
//    require_once "constants.php";
//    $host = "localhost:3306";
//    $user = "root";
//    $pass = "";
//    $db_name = "a_pet_social_media";
//    $mysql_connection = mysql_connect($host, $user, $pass);
//    if($mysql_connection){ // if connected return true
//        $select_db = mysql_select_db($db_name, $mysql_connection);
//        if($select_db) {
//
//        } else {
//            die("Unable to connect to database");
//        }
//    } else {
//        die("Unable to connect to mysql server");
//    }
?>