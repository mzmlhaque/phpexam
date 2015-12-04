<?php
/**
 * Created by PhpStorm.
 * User: SERAC-Bangladesh
 * Date: 11/29/2015
 * Time: 5:36 PM
 */
error_reporting(0);
session_start();
$e_id = $_SESSION['e_id'];
include('pdo_connection.php');
include('database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);
$sql="SELECT * FROM employee_time_in WHERE e_id = '$e_id' AND date = (SELECT CURRENT_DATE)";
$data = $dbcon->query($sql);
$row = $data->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['submit']) && isset($e_id)){
    $action = $_POST['action'];
    if(isset($_POST['action']) && isset($_POST['reason'])){
        $reason = $_POST['reason'];
        if($row['time_in']!=''){
            echo("<script>alert('You already Enrolled today....')</script>");
            echo("<script>location.href='index.php'</script>");
        }else{
            if($action = 'time_in'){
                $sql="INSERT INTO `employee`.`employee_time_in` (`id`, `e_id`, `date`, `time_in`,`reason`) VALUES (NULL, '$e_id', (SELECT CURRENT_DATE), (SELECT CURRENT_TIME), '$reason');";
                $preparestatement=$dbcon->prepare($sql);
                $preparestatement->execute();
                echo("<script>alert('Successfully Recorded..!!')</script>");
            }
        }

    }else if(isset($_POST['action'])){
        if($action == 'time_in'){
            if($row['time_in']!=''){
                echo("<script>alert('You already Enrolled today...')</script>");
                echo("<script>location.href='index.php'</script>");
            }else{
                $sql="INSERT INTO `employee`.`employee_time_in` (`id`, `e_id`, `date`, `time_in`) VALUES (NULL, '$e_id', (SELECT CURRENT_DATE), (SELECT CURRENT_TIME));";
                $preparestatement=$dbcon->prepare($sql);
                $preparestatement->execute();
                echo("<script>alert('Successfully Recorded..!!')</script>");
            }
        }else if($action = 'time_out'){
            if($row['time_out']!=''){
                echo("<script>alert('You already Enrolled today....')</script>");
                echo("<script>location.href='index.php'</script>");
            }else{

                $sql="UPDATE `employee`.`employee_time_in` SET `time_out` = (SELECT CURRENT_TIME)  WHERE `e_id` = '$e_id' AND date = (SELECT CURRENT_DATE);";
                $preparestatement=$dbcon->prepare($sql);
                $preparestatement->execute();

                /***********************************
                    Collecting Worked Hours
                 *********************** **********/
                $sql="SELECT (SELECT TIMEDIFF((SELECT time_out FROM employee_time_in WHERE date=(SELECT CURRENT_DATE)AND e_id = $e_id),(SELECT time_in FROM employee_time_in WHERE date=(SELECT CURRENT_DATE)AND e_id = $e_id))) as hour";
                $data = $dbcon->query($sql);
                $row = $data->fetch(PDO::FETCH_ASSOC);

                $hours = $row['hour'];

              $sql="UPDATE `employee`.`employee_time_in` SET `hours` = '$hours'  WHERE `e_id` = '$e_id' AND date = (SELECT CURRENT_DATE);";
                $preparestatement=$dbcon->prepare($sql);
               $preparestatement->execute();

                echo("<script>alert('Enrolled successfully. Today You worked $hours hours.')</script>");
                echo("<script>location.href='index.php'</script>");
            }
        }
    }else{
        echo("<script>alert('Something Went Wrong.')</script>");
        echo("<script>location.href='index.php'</script>");
    }

}else{
    echo("<script>alert('Something Went Wrong.')</script>");
    echo("<script>location.href='index.php'</script>");
}

?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div id="login">
                <h4>HeY <?php echo $_SESSION['name']?>. Thanks you for using this system. You entry time is <span style="color:#d43f3a" id="time_in"></span></h4>
                <h4>Press Logout to exit from the system.</h4>
                <a href="logout.php"><button class="btn btn-danger">Logout</button></a>
                <br>
                <br>
                <br>
                <h3>Have a Good Day</h3>
            </div>
        </div>
    </div>
    <!-- End row -->
</div>
<!-- End container -->

