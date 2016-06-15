<?php
    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $db_name = "a_pet_social_media";
    $mysql_connection = mysql_connect($host, $user, $pass);
    if($mysql_connection){ // if connected return true
        $select_db = mysql_select_db($db_name, $mysql_connection);
        if($select_db) {

        } else {
            die("Unable to connect to database");
        }
    } else {
        die("Unable to connect to mysql server");
    }
?>