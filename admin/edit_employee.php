<?php
/**
 * Created by PhpStorm.
 * User: SERAC-Bangladesh
 * Date: 11/29/2015
 * Time: 8:11 PM
 */
error_reporting(0);
session_start();
if(isset($_SESSION['logged_role']) and $_SESSION['logged_role']== 'admin'){
    $e_id = $_GET['e_id'];
    include('../pdo_connection.php');
    include('../database_config.php');
    $db_user =$database_user;
    $db_pass =$databse_pass;
    $db_name=$database_name;
    $dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);
    $sql="SELECT * FROM `employee_profile` WHERE e_id = '$e_id' ;";
    $data = $dbcon->query($sql);
    $row = $data->fetch(PDO::FETCH_ASSOC);
    $name = $row['name'];
    $address = $row['address'];
    $dob = $row['dob'];
    $dob = $row['dob'];
    $department = $row['department'];
    $designation = $row['designation'];
    $sallery = $row['sallery'];
    $image = $row['image'];
    $email = $row['email'];
    $password = $row['password'];
    $rate = $row['hourly_rate'];
    $total_leave = $row['total_leave'];
    $leave_remain = $row['leave_remaining'];
    include_once('../inc/template_part_edit_employee.php');
}else{
    include_once('404.php');
}

?>
