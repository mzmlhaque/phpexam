<?php
include('../pdo_connection.php');
include('../database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);
$sql="SELECT * FROM settings";
$data = $dbcon->query($sql);

session_start();

if(isset($_SESSION['logged_role']) and $_SESSION['logged_role']== 'admin'){
    include_once('../inc/template_part_index.php');
    include_once('footer.php');
}else{
    include_once('404.php');
}



 ?>