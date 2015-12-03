<?php
/**
 * Created by PhpStorm.
 * User: SERAC-Bangladesh
 * Date: 11/29/2015
 * Time: 8:02 PM
 */
session_start();
if(isset($_SESSION['logged_role']) && $_SESSION['logged_role']!='admin'){
    echo "<script>location.href='404.php'</script>";
}else{
    include_once('header.php');
    $e_id = $_GET['e_id'];
    include_once('../pdo_connection.php');
    include_once('../database_config.php');
    $db_user =$database_user;
    $db_pass =$databse_pass;
    $db_name=$database_name;
    $dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);
    $sql="SELECT * FROM employee_profile WHERE e_id=$e_id";
    $data = $dbcon->query($sql);
    $row = $data->fetch(PDO::FETCH_ASSOC);
}
?>
<div id="login">
    <div class="container">
        <div class="row">
            <h3>Porfile of : <span class="text-primary"><?php echo $row['name']?></span></h3>
            <br><br><br>

            <div class="col-md-4">
                <a href="#"><img src="../images/<?php echo $row['image']?>" alt=""></a>
            </div>

            <div class="col-md-8 record">
                <div class="row table">
                    <div class="col-xs-1 title">
                        1
                    </div>
                    <div class="col-xs-4 title">
                        Employee Name:
                    </div>
                    <div class="col-xs-7">
                        <?php echo $row['name'];?>
                    </div>
                </div>
                <div class="row table">
                    <div class="col-xs-1 title">
                        2
                    </div>
                    <div class="col-xs-4 title">
                        Employee ID:
                    </div>
                    <div class="col-xs-7">
                        <?php echo $row['e_id'];?>
                    </div>
                </div>
                <div class="row table">
                    <div class="col-xs-1 title">
                        3
                    </div>
                    <div class="col-xs-4 title">
                        Date of Birth:
                    </div>
                    <div class="col-xs-7">
                        <?php echo $row['dob'];?>
                    </div>
                </div>
                <div class="row table">
                    <div class="col-xs-1 title">
                        4
                    </div>
                    <div class="col-xs-4 title">
                        Address:
                    </div>
                    <div class="col-xs-7">
                        <?php echo $row['address'];?>
                    </div>
                </div>
                <div class="row table">
                    <div class="col-xs-1 title">
                        5
                    </div>
                    <div class="col-xs-4 title">
                        Designation:
                    </div>
                    <div class="col-xs-7">
                        <?php echo $row['designation'];?>
                    </div>
                </div>
                <div class="row table">
                    <div class="col-xs-1 title">
                        6
                    </div>
                    <div class="col-xs-4 title">
                        Department:
                    </div>
                    <div class="col-xs-7">
                        <?php echo $row['department'];?>
                    </div>
                </div>
                <div class="row table">
                    <div class="col-xs-1 title">
                        7
                    </div>
                    <div class="col-xs-4 title">
                        E-mail:
                    </div>
                    <div class="col-xs-7">
                        <?php echo $row['email'];?>
                    </div>
                </div>
                <div class="row table">
                    <div class="col-xs-1 title">
                        8
                    </div>
                    <div class="col-xs-4 title">
                        Total Leave:
                    </div>
                    <div class="col-xs-7">
                        <?php echo $row['total_leave'];?>
                    </div>
                </div>
                <div class="row table">
                    <div class="col-xs-1 title">
                        9
                    </div>
                    <div class="col-xs-4 title">
                        Remaining Leave:
                    </div>
                    <div class="col-xs-7">
                        <?php echo $row['leave_remaining'];?>
                    </div>
                </div>

            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <a href="edit_employee.php?e_id=<?php echo $row['e_id'];?>"><button class="btn btn-primary">Edit Employee Profile</button></a>
        </div>
    </div>
</div>
</div>
</div>
<section id="wrapper">


</section>
<?php
    include_once('footer.php');
?>
