<?php
/**
 * Created by PhpStorm.
 * User: SERAC-Bangladesh
 * Date: 12/4/2015
 * Time: 11:21 AM
 */
error_reporting(0);
session_start();
if(isset($_SESSION['logged_role']) && $_SESSION['logged_role']=='admin'){


    if(isset($_REQUEST['e_id'])){
        $e_id = $_REQUEST['e_id'];
        include('../pdo_connection.php');
        include('../database_config.php');
        $db_user =$database_user;
        $db_pass =$databse_pass;
        $db_name=$database_name;
        $dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);

        if($_REQUEST['e_id'] != ''){
            $sql="SELECT * FROM employee_profile WHERE e_id = $e_id";
            $data = $dbcon->query($sql);
            $row = $data->fetch(PDO::FETCH_ASSOC);
            $id = $row['e_id'];
            $leave = $row['leave_remaining'];
            $name = $row['name'];
            echo "<label for='leave_name'>Employee Name: </label>";
            echo "<input type='text' id='leave_name' class='form-control' disabled value='$name' name='name'><br>";
            echo "<label for='leave_remaining_update'>Remaining Leave: </label>";
            echo "<input type='text' id='leave_remaining_update' class='form-control' value='$leave' name='leave_remaining'><br>";
        }elseif($_REQUEST['e_id'] == ''){
            echo "<label for='leave_name'>Employee Name: </label>";
            echo "<input type='text' id='leave_name' class='form-control' disabled value='Not found' name='name'><br>";
            echo "<label for='leave_remaining_update'>Remaining Leave: </label>";
            echo "<input type='text' id='leave_remaining_update' disabled class='form-control' value='Not found' name='leave_remaining'><br>";
        }
    }
}else{
    echo "<h2 class='text-danger'>Access Denied</h2>";
}