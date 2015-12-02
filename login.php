<?php
include('pdo_connection.php');
include('database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);
session_start();

    if(isset($_SESSION['username']) && isset($_SESSION['logged_role']) && isset($_SESSION['password'])){
        echo("<script>location.href='employee_action.php'</script>");
    }elseif(isset($_POST['login'])){
        $logged_role = $_POST['login_role'];
        $username = $_POST['useremail'];
        $password =$_POST['password'];
        if($logged_role == 'admin'){
            $sql="SELECT * FROM settings WHERE username = '$username' AND password = '$password'";
            $data = $dbcon->query($sql);
            $row = $data->fetch(PDO::FETCH_ASSOC);
            if($row['username'] == $username && $row['password'] == $password) {
                $_SESSION['logged_role'] = $logged_role;
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                echo("<script>location.href='admin/index.php'</script>");
            }
        }else{
            $sql="SELECT * FROM employee_profile WHERE email = '$username' AND password = '$password'";
            $data = $dbcon->query($sql);
            $row = $data->fetch(PDO::FETCH_ASSOC);
            if($row['email'] == $username && $row['password'] == $password) {
                $_SESSION['logged_role'] = $logged_role;
                $_SESSION['username'] = $row['email'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['e_id'] = $row['e_id'];
                echo("<script>location.href='employee.php'</script>");
            }else {
                echo("<script>alert('Username or Password not matched.')</script>");
                echo("<script>location.href='index.php'</script>");
            }
        }
    }

?>
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="#" class="active" id="login-form-link">Login</a>
                            </div
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="login.php" method="post" role="form" style="display: block;">
                                    <div class="form-group">
                                        <select name="login_role" id="login_type" class="form-control">
                                            <option value="">--Your are--</option>
                                            <option value="admin">Admin</option>
                                            <option value="employee">Employee</option>
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="useremail" id="username" tabindex="1" class="form-control" placeholder="User email" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                        <label for="remember"> Remember Me</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login" id="login-submit" tabindex="4" class="form-control btn btn-primary" value="Log In">
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="http:signup.php" tabindex="5" class="forgot-password">Open an Account</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $('#login-form-link').click(function(e) {
                $("#login-form").delay(100).fadeIn(100);
                $("#register-form").fadeOut(100);
                $('#register-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
            $('#register-form-link').click(function(e) {
                $("#register-form").delay(100).fadeIn(100);
                $("#login-form").fadeOut(100);
                $('#login-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });

        });

    </script>