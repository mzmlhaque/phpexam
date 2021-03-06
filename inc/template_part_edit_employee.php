<?php
/**
 * Created by PhpStorm.
 * User: SERAC-Bangladesh
 * Date: 12/2/2015
 * Time: 10:03 PM
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
            <h2 class="text-center"><?php echo $_SESSION['companyName']?></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav id="navbar">
                    <ul class="list-inline" style="padding: 15px;" id="menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="../signup.php">Add Employee</a></li>
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
            <div class="col-sm-8 col-sm-offset-2">
                <form action="process.php" method="post" enctype="multipart/form-data">
                    <h2>Employee Information Update System</h2>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="">Name: </label>
                                <input type="text" name="name" id="first_name" class="form-control input-lg" placeholder="Name" tabindex="1" required value="<?php echo $name?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail: </label>
                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="3" required value="<?php echo $email?>">
                    </div>
                    <div class="form-group">
                        <label for="address">Address: </label>
                        <input type="text" name="address" id="address" class="form-control input-lg" value="<?php echo $address?>" placeholder="Address" tabindex="4" required>
                    </div>
                    <div class="form-group">
                        <label for="designations">Designation: </label>
                        <select name="designations" id="designations" class="form-control" required>
                            <option value="<?php echo $designation?>" selected>--<?php echo $designation?>--
                                <?php
                                $sql="SELECT designations FROM settings;";
                                $data = $dbcon->query($sql);
                                while($row = $data->fetch(PDO::FETCH_ASSOC)){
                                    $designations = $row['designations'];
                                    if($designations!=''){
                                        echo "<option value='$designations''>$designations</option>";
                                    }
                                }
                                ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="department">Department: </label>
                        <select name="department" id="department" class="form-control" required>
                            <option value="<?php echo $department?>" selected>--<?php echo $department?>--
                                <?php
                                $sql="SELECT departments FROM settings;";
                                $data = $dbcon->query($sql);
                                while($row = $data->fetch(PDO::FETCH_ASSOC)){
                                    $departments = $row['departments'];
                                    if($departments !=''){
                                        echo "<option value='$departments'>$departments</option>";
                                    }
                                }
                                ?>

                        </select>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="password">Password: </label>
                                <input type="password" value="<?php echo $password?>" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="6" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="datepicker">Date of Birth: </label>
                                <input class="form-control" type="date" id="datepicker" value="<?php echo $dob?>" name="dob" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="sallery">Sallery: </label>
                                <input class="form-control" id="sallery" name="sallery" type="text" placeholder="Sallery" value="<?php echo $sallery?>" name="sallery" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="leave_t">Total Leave: </label>
                                <input class="form-control" id="leave_t" type="text" placeholder="Total Leave" value="<?php echo $total_leave?>" name="total_leave" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="leave_r">Remaining Leave: </label>
                                <input class="form-control" name="leave_remaining" id="leave_r" type="text" placeholder="Leave Remaining" value="<?php echo $leave_remain?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="e_id">Employee ID: </label>
                                <input type="text" id="e_id" name="e_id" class="form-control" value="<?php echo $e_id?>">
                                <input type="hidden" name="e_id_old" value="<?php echo $e_id?>">
                            </div>
                        </div>
                    </div>


                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-md-6"> <input id="submit" type="submit" name="submit" value="Update Employee" class="btn btn-primary btn-block btn-lg"></div>
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
    $(function() {
        $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
    });

</script>
</body>
</html>

