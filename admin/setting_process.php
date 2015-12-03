<?php
/**
 * Created by PhpStorm.
 * User: SERAC-Bangladesh
 * Date: 12/2/2015
 * Time: 11:05 PM
 */

include_once('../pdo_connection.php');
include_once('../database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);
session_start();
if(isset($_SESSION['logged_role']) and $_SESSION['logged_role']== 'admin'){
    if(isset($_POST['submit'])){
        $company_name =  htmlentities($_POST['company_name']);
        $company_email =  htmlentities($_POST['company_email']);
        $latest_news =  htmlentities($_POST['latest_news']);
        $admin_name = htmlentities($_POST['admin_name']);
        $username =  htmlentities($_POST['username']);
        $password =  htmlentities($_POST['password']);
        $company_info = $_POST['company_info'];
        if($latest_news != ''){
            $sql = "INSERT INTO `employee`.`settings` (`id`,`latestNews`) VALUES (NULL, '$latest_news');";
            $preparestatement = $dbcon->prepare($sql);
            $preparestatement->execute();
        }

        $sql = "UPDATE settings SET companyName ='$company_name', companyInfo= '$company_info', companyEmail='$company_email', adminName = '$admin_name', password = '$password', username='$username' WHERE id = 1;";
        $preparestatement = $dbcon->prepare($sql);
        $preparestatement->execute();
        echo("<script>alert('Settings Updated')</script>");
        echo("<script>location.href='settings.php'</script>");

    }
}else{
    require_once('404.php');
}