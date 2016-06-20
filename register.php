<?php
    $register_button = $_POST["register_btn"];
    if(isset($register_button)) {
        $email = $_POST["email_address_of_user"];
        $password = $_POST["password_of_user"];
        if(isset($email) && !empty($email) && isset($password) && !empty($password)) {
            echo "everthing ok";
        } else {
            echo "both fields are required";
        }
    }
