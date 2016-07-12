<?php
    require_once("application/db.php");
    require_once("application/functions.php");
    require_once("application/send_email.php");

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
                        send_new_email
                        (
                            EMAIL_FROM_ADDRESS,
                            $email,
                            'Welcome to Pet Social Media, Please Verify Your Account',
                            '<!doctype html><html lang="en"><head><meta charset="UTF-8"> <title>Welcome To Pet Social Media, Please Verify Your Account</title></head><body> <p>Hi,</p><p>We saw you have created your account in our website.</p><p><a href="'.BASE_URL.'verify.php?code=' . $user_login_information['verification'] .'">Please visit this link to verify your account</a> and get started</p><p>Cheers</p><p>Avinash Seth</p></body></html>'
                        );
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
