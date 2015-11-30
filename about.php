<?php
/**
 * Created by PhpStorm.
 * User: Mozammel
 * Date: 11/23/2015
 * Time: 2:35 AM
 */
include('pdo_connection.php');
include('database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);
$sql="SELECT * FROM settings";
$data = $dbcon->query($sql);
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3>About Us</h3>
            <?php
                while($row = $data->fetch(PDO::FETCH_ASSOC)){
                echo $row['companyInfo'];
                }
            ?>
        </div>
    </div>
    <!-- End row -->
</div>
<!-- End container -->
