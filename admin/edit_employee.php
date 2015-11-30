<?php
/**
 * Created by PhpStorm.
 * User: SERAC-Bangladesh
 * Date: 11/29/2015
 * Time: 8:11 PM
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CodersTrust- php Examination</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://daks2k3a4ib2z.cloudfront.net/5379a5938fa1ea4e1cba8034/537efd4a7b58dcd03527229e_favicon.ico">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,100,900,900italic,400italic,700,300italic,300' rel='stylesheet' type='text/css'>
    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="../js/bootstrap.min.js"></script>
    <script src=../js/main.js></script>
    <style>
        #navbar ul {
            margin-left: 5%;
        }
    </style>
</head>
<body>
<section id="header">
    <div class="container-fluid">
        <div class="row" style="padding: 20px;background: #204d74;color: orange;">
            <h2 class="text-center">Wellcome to Our StartUp company</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav id="navbar">
                    <ul class="list-inline" style="padding: 15px;" id="menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="javascript:void (0)" onclick="ajax_request('../add_employee.php')">Add Employee</a></li>
                        <li><a href="javascript:void (0)" onclick="ajax_request('../contact.php')">Employee Status</a></li>
                        <li><a href="javascript:void (0)" onclick="ajax_request('../login.php')">Leave Manage</a></li>
                        <li><a href="javascript:void (0)" onclick="ajax_request('../employee_action.php')">Accounts</a></li>
                        <li><a href="javascript:void (0)" onclick="ajax_request('../employee_action.php')">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- end container -->
</section>

<section id="wrapper">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <form action="process.php" method="post" enctype="multipart/form-data">
                <h2>Please Sign Up <small>List you name with the wanted Criminals</small></h2>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="3" required>
                </div>
                <div class="form-group">
                    <input type="text" name="address" id="address" class="form-control input-lg" placeholder="Address" tabindex="4" required>
                </div>
                <div class="form-group">
                    <input type="text" name="crimes" id="address" class="form-control input-lg" placeholder="Associated Crimes" tabindex="5" required>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <span>Password</span>
                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="6" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <span>Date of Birth</span>
                            <input class="form-control" type="date" id="datepicker" name="dob" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <p>Profile Picture(300x300)</p>
                            <input type="file" name="image" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4 col-sm-3 col-md-3">
                        <span class="button-checkbox">
                            <button type="button" class="btn" data-color="info" tabindex="7">Agreement</button>
                            <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
                        </span>
                    </div>
                    <div class="col-xs-8 col-sm-9 col-md-9">
                        By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
                    </div>
                </div>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-md-6"> <input type="submit" name="submit" value="Register" class="btn btn-primary btn-block btn-lg"></div>
                    <div class="col-xs-12 col-md-6"><a href="login.php" class="btn btn-success btn-block btn-lg">Sign In</a></div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
<section id="footer">
    <div class="container-fluid">
        <p class="copyright text-center">&copy; All right reserved- 2015</p>
    </div>
</section>
<script>
    ('document').ready(function(){
        $(function() {
            $( "#datepicker" ).datepicker();
        });
    })
</script>
</body>
</html>
