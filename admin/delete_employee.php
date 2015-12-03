<?php
/**
 * Created by PhpStorm.
 * User: SERAC-Bangladesh
 * Date: 12/3/2015
 * Time: 1:01 PM
 */
session_start();
if(isset($_SESSION['logged_role']) && $_SESSION['logged_role']=='admin'){
    $e_id = $_REQUEST['e_id'];
    include_once('../pdo_connection.php');
    include_once('../database_config.php');
    $db_user =$database_user;
    $db_pass =$databse_pass;
    $db_name=$database_name;
    $dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);
    $sql="DELETE  FROM employee_profile WHERE e_id=$e_id;";
    $preparestatement=$dbcon->prepare($sql);
    $preparestatement->execute();
    echo "Deleted";
}else{
    include_once('404.php');
}