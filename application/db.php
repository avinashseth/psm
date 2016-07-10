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
?>