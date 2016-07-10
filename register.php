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
                $user_unique_key = generate_unique_key("owner_unique",$database,TBL_OWNER_LOGIN_INFORMATION,15);
                $user_login_information = array(
                    'owner_unique' => $user_unique_key,
                    'owner_email' => $email,
                    'owner_password' => $password,
                    'created_at' => return_time(),
                    'updated_at' => return_time(),
                    'status' => USER_ACCOUNT_INFO_NEEDED,
                    'verification' => generate_unique_key("verification", $database, TBL_OWNER_LOGIN_INFORMATION, 50)
                );
                $user_details_information = array(
                    'owner_unique' => $user_unique_key,
                    'owner_name' => null,
                    'owner_age' => 0,
                    'owner_gender' => USER_GENDER_NOT_DEFINED,
                    'created_at' => return_time(),
                    'updated_at' => return_time(),
                );
                if(save_data($user_login_information, TBL_OWNER_LOGIN_INFORMATION, $database))
                {
                    if(save_data($user_details_information, TBL_OWNER_DETAILS, $database))
                    {
                        echo "user account created";
                    }
                    else
                    {
                        echo "user account not created";
                    }
                }
                else
                {
                    echo "user account not created";
                }
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
