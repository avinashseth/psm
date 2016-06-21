<?php
    $register_button = $_POST["register_btn"];
    if(isset($register_button)) {
        // process only when submit button is clicked
        $email = $_POST["email_address_of_user"];
        $password = $_POST["password_of_user"];
        if(isset($email) && !empty($email) && isset($password) && !empty($password)) {
            // process only when both fields are filled and not empty
            echo htmlentities($email);
            echo htmlentities($password);
        } else {
            echo "both fields are required";
        }
    }
