<?php
    require_once("application/db.php");
    $register_button = $_POST["register_btn"];
    if(isset($register_button)) {
        // process only when submit button is clicked
        $email = $_POST["email_address_of_user"];
        $password = $_POST["password_of_user"];
        if(isset($email) && !empty($email) && isset($password) && !empty($password)) {
            // process only when both fields are filled and not empty
//            $sql = "INSERT INTO `".TBL_OWNER_LOGIN_INFORMATION."`";
//            $sql .= "(`owner_unique`, `owner_email`, ";
//            $sql .= "`owner_password`, ";
//            $sql .= "`status`, `verification`) VALUES ";
//            $sql .= "('123sadf123sdf','".htmlentities($email)."','".htmlentities($password)."',";
//            $sql .= ",0,'asdfdsasadfdsf')";
//            $result = mysql_query($sql);
            $database->insert(TBL_OWNER_LOGIN_INFORMATION, [
                "owner_unique" => "1478523996",
                "owner_email"=>htmlentities($email),
                "owner_password"=>htmlentities($password),
                "status"=>'0',
                "verification"=>'123'
            ]);
            var_dump($database);
        } else {
            echo "both fields are required";
        }
    }
