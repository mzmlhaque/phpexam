<?php
/**
 * Created by PhpStorm.
 * User: SERAC-Bangladesh
 * Date: 12/2/2015
 * Time: 7:25 AM
 */
//preparing Database connection
include_once('pdo_connection.php');
include_once('database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);

//End database connection preparation



if(isset($_REQUEST['email_check'])){
    $email = $_REQUEST['email_check'];
    $sql="SELECT email FROM employee_profile WHERE email = '$email'";
    $data = $dbcon->query($sql);
    $row = $data->fetch(PDO::FETCH_ASSOC);
    echo $row['email'];
}
 if(isset($_POST['submit'])) {
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $address = htmlentities($_POST['address']);
    $designation = htmlentities($_POST['designations']);
    $department = htmlentities($_POST['department']);
    $password = htmlentities($_POST['password']);
    $dob = htmlentities($_POST['dob']);
    $e_id = htmlentities($_POST['e_id']);
    $file = $_FILES['image'];
    $image_name = $file['name'];
    $image_temp = $file['tmp_name'];
    $image_type = $file['type'];
    $image_size = $file['size'];
    $image_error = $file['error'];
    $accept = array('jpg', 'jpeg', 'png');
    $temp = explode(".", $image_name);
    if ($file['size'] >= 50000) {
        echo("<script>alert('Image size is not allowed')</script>");
        echo("<script>location.href='signup.php'</script>");
    } elseif (!in_array(end($temp), $accept)) {
        echo("<script>alert('please upload jpg or png file')</script>");
        echo("<script>location.href='signup.php'</script>");
    } else {
        $newfilename = round(microtime(true)) . '.' . end($temp);
        move_uploaded_file($image_temp, "images/$newfilename");
        $picture = $newfilename;
        $sql = "INSERT INTO `employee`.`employee_profile` (`id`, `e_id`, `name`, `dob`, `address`, `department`, `designation`, `image`, `email`, `password`) VALUES (NULL, '$e_id', '$name', '$dob', '$address', '$department', '$designation','$picture', '$email', '$password');";
        $preparestatement = $dbcon->prepare($sql);
        $preparestatement->execute();
        echo("<script>alert('Registered Successfully.')</script>");
        echo("<script>location.href='index.php'</script>");
    }

}
?>