<?php
    require_once __DIR__ . '/../vendor/autoload.php';

    $dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
    $dotenv->load();

    define('BASE_URL','http://localhost:8080/psm/');

    // table name
    define('TBL_OWNER_LOGIN_INFORMATION','owner_login_information');
    define('TBL_OWNER_DETAILS', 'owner_details');

    /* user status */
    define('USER_ACCOUNT_ACTIVE', 1);
    define('USER_ACCOUNT_INFO_NEEDED', 2);
    define('USER_ACCOUNT_BANNED', 3);

    /* user gender */
    define('USER_GENDER_MALE', 1);
    define('USER_GENDER_FEMALE', 2);
    define('USER_GENDER_NOT_DEFINED', 0);

    /* email related constants */
    define('EMAIL_PASSWORD', $email_password);
    define('EMAIL_FROM_ADDRESS', 'logiyoutech@gmail.com');

    define('FB_PASSWORD', getenv('FB_PASSWORD'));