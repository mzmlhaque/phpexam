<?php
/**
 * Created by PhpStorm.
 * User: SERAC-Bangladesh
 * Date: 12/2/2015
 * Time: 7:25 AM
 */
session_start();

if(isset($_SESSION['logged_role']) && $_SESSION['logged_role']=='admin'){
    //preparing Database connection
    include_once('../pdo_connection.php');
    include_once('../database_config.php');
    $db_user =$database_user;
    $db_pass =$databse_pass;
    $db_name=$database_name;
    $dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);
//End database connection preparation
    if(isset($_POST['submit'])) {
        $name = htmlentities($_POST['name']);
        $email = htmlentities($_POST['email']);
        $address = htmlentities($_POST['address']);
        $designation = htmlentities($_POST['designations']);
        $department = htmlentities($_POST['department']);
        $password = htmlentities($_POST['password']);
        $dob = htmlentities($_POST['dob']);
        $e_id = htmlentities($_POST['e_id']);
        $e_id_old = htmlentities($_POST['e_id_old']);
        $sallery = htmlentities($_POST['sallery']);
        $leave_remaining = htmlentities($_POST['leave_remaining']);
        $total_leave = htmlentities($_POST['total_leave']);

        $sql = "UPDATE employee_profile SET name ='$name', total_leave= '$total_leave', sallery='$sallery', leave_remaining = '$leave_remaining', password = '$password', e_id='$e_id', designation = '$designation', department = '$department',email='$email', dob='$dob',address = '$address' WHERE e_id = '$e_id_old';";

        $preparestatement = $dbcon->prepare($sql);
        $preparestatement->execute();
        echo("<script>alert('Updated Successfully.')</script>");
        echo("<script>location.href='index.php'</script>");

    }
}else{
    include_once('404.php');
}
?>