<?php
/**
 * Created by PhpStorm.
 * User: Mozammel
 * Date: 11/23/2015
 * Time: 2:35 AM
 */
session_start();
if(isset($_SESSION['logged_role']) and $_SESSION['logged_role']== 'admin'){
    include_once('../inc/template_part_employee_data.php');
}else{
    include_once('404.php');
}

?>