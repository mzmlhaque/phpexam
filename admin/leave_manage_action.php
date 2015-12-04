<?php
/**
 * Created by PhpStorm.
 * User: SERAC-Bangladesh
 * Date: 12/4/2015
 * Time: 11:21 AM
 */
session_start();
error_reporting(0);
if(isset($_SESSION['logged_role']) && $_SESSION['logged_role']=='admin'){
    if(isset($_POST['e_id'])){
        $e_id = $_POST['e_id'];
        $leave = $_POST['leave_remaining'];
        include('../pdo_connection.php');
        include('../database_config.php');
        $db_user =$database_user;
        $db_pass =$databse_pass;
        $db_name=$database_name;
        $dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);
        $sql="UPDATE `employee`.`employee_profile` SET `leave_remaining` = '$leave' WHERE `employee_profile`.`e_id` = $e_id;";
        $preparestatement = $dbcon->prepare($sql);
        $preparestatement->execute();
        echo("<script>location.href='leav_manage.php?page=Leave+Management&leave_status=updated'</script>");
    }
}else{
    echo "<h2 class='text-danger'>Access Denied</h2>";
}