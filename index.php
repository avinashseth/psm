<?php
    require_once("application/db.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>For you guys</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <style>
        body{
            background: url(images/background.jpg) no-repeat center center fixed;
            background-size: cover;
        }
        .facebook_btn{
            background: #3b5998;
            border: none;
            color: white;
        }
        .facebook_btn:hover{
            background: #3b5998;
            color: white;
        }
        .google_btn{
            background: #ea4335;
            border: none;
            color: white;
        }
        .google_btn:hover{
            background: #ea4335;
            color: white;
        }
        /* hacking bootstrap */
        .form-group{
            margin-bottom: 0px;
        }
        #user_email{
            border: none;
            border-radius: 20px 20px 0px 0px;
        }
        #user_password{
            border: none;
            border-radius: 0px 0px 20px 20px;
        }
        #user_email:active{
            box-shadow: inset 0 5px 5px rgba(0,0,0,.075);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="col-lg-4 col-md-4"></div>
                <div class="col-lg-4 col-md-4" style="margin: 200px auto;">
                    <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                            <button class="btn google_btn btn-block"><i class="fa fa-google-plus"></i> Google</button>
                        </div>
                        <div class="btn-group">
                            <button class="btn facebook_btn btn-block"><i class="fa fa-facebook-official"></i> Facebook</button>
                        </div>
                    </div>
                    <form action="" style="padding: 15px 0px;">
                        <div class="form-group">
                            <input id="user_email" placeholder="example@domain.com" type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <input id="user_password" placeholder="my$tr0gpSwd" type="password" class="form-control" />
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-4"></div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>