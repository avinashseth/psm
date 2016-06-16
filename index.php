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
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="col-lg-4 col-md-4"></div>
                <div class="col-lg-4 col-md-4 well" style="margin: 200px auto;">
                    <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                            <button class="btn btn-primary btn-block">Google</button>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-info btn-block">Facebook</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4"></div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>