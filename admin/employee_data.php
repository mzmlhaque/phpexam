<?php

include('../pdo_connection.php');
include('../database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);
if(isset($_REQUEST['name'])){
    $req_name = $_REQUEST['name'];
    $sql="SELECT * FROM employee_profile WHERE name LIKE '$req_name'";
}elseif(isset($_REQUEST['department']))
{
    $req_dept = $_REQUEST['department'];
    $sql="SELECT * FROM employee_profile WHERE department = '$req_dept'";
}
else
{
    $sql="SELECT * FROM employee_profile";
}
$data = $dbcon->query($sql);
?>


<h2>ABCD Compnay Employee Data</h2>

<div class="row">
    <div class="col-xs-12">
        <table class="table table-bordered table-hover" summary="all employee data">
            <caption class="text-center">All employee Data of this company is here:</caption>
            <thead>
            <tr>
                <th>Serial No:</th>
                <th>E-Id</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $c = 1;
                while($row = $data->fetch(PDO::FETCH_ASSOC)){
                    ?>
            <tr>
                <td><?php echo $c?></td>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['designation']?></td>
                <td>Active</td>
                <td>
                    <button class="btn btn-success">Edit</button>
                    <button class="btn btn-primary">View</button>
                </td>
            </tr>
            <?php $c++;
                }
            ?>
            </tbody>
            <tfoot>
            <tr>
                <td class="text-center" colspan="5">Developed by: <a target="_blank" href="http://aponsite.com">Mozammel Haque</a> and directed by: <a href="mailto:rajesh@coderstrust.com">Rajesh Ghos</a>.</td>
            </tr>
            </tfoot>
        </table>
    </div>
</div>