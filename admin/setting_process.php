<?php
/**
 * Created by PhpStorm.
 * User: SERAC-Bangladesh
 * Date: 12/2/2015
 * Time: 11:05 PM
 */
include('pdo_connection.php');
include('database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);
session_start();
include_once('header.php');
if(isset($_SESSION['logged_role']) and $_SESSION['logged_role']== 'admin'){
    if(isset($_POST['submit'])){
        $company_name =  $_POST['company_name'];
        $latest_news =  $_POST['latest_news'];
        $admin_name =  $_POST['admin_name'];
        $username =  $_POST['username'];
        $password =  $_POST['password'];
        $company_info =  $_POST['company_info'];
        if($latest_news != ''){
            $sql = "INSERT INTO `employee`.`settings` (`id`,`latestNews`) VALUES (NULL, '$latest_news');";
            $preparestatement = $dbcon->prepare($sql);
            $preparestatement->execute();
            echo("<script>alert('Registered Successfully.')</script>");
        }



    }
}else{
    require_once('404.php');
}