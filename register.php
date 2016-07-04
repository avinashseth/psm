<?php
    require_once("application/db.php");
    require_once("application/functions.php");
    $register_button = $_POST["register_btn"];
    if(isset($register_button)) {
        // process only when submit button is clicked
        $email = $_POST["email_address_of_user"];
        $password = $_POST["password_of_user"];
        if(isset($email) && !empty($email) && isset($password) && !empty($password)) {
            if(
                is_unique
                (
                    "owner_email",
                    $database,
                    TBL_OWNER_LOGIN_INFORMATION,
                    $email
                )
            )
            {
                // email is unique
                echo generate_unique_key("owner_unique",$database,TBL_OWNER_LOGIN_INFORMATION,15);
            }
            else
            {
                // email address already exists
                echo "email is not unique";
            }
        } else {
            echo "both fields are required";
        }
    }
