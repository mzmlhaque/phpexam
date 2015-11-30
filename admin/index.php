<?php
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
<body onload="ajax_employee_data('employee_data.php')">
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
                        <li><a href="add_employee.php">Add Employee</a></li>
                        <li><a href="employee_status.php">Employee Status</a></li>
                        <li><a href="leav_manage.php">Leave Manage</a></li>
                        <li><a href="accounts.php">Accounts</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- end container -->
</section>
<div id="login">
</div>
<section id="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div id="employee_data">

                </div>
            </div>
        </div>
    </div>
    <div id="employee_data">

    </div>
</section>
<?php
    include_once('footer.php');

 ?>