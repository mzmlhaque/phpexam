<?php
/**
 * Created by PhpStorm.
 * User: SERAC-Bangladesh
 * Date: 11/30/2015
 * Time: 1:58 PM
 */
session_start();
include_once('header.php');
if(isset($_SESSION['logged_role']) and $_SESSION['logged_role']== 'admin'){
    include_once('../pdo_connection.php');
    include_once('../database_config.php');
    $db_user =$database_user;
    $db_pass =$databse_pass;
    $db_name=$database_name;
    $dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);
    $sql="SELECT * FROM settings;";
    $data = $dbcon->query($sql);
    $row = $data->fetch(PDO::FETCH_ASSOC);
}else{
    echo("<script>location.href='404.php'</script>");
}
?>
<section id="settings_form">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <form action="setting_process.php" method="post" enctype="multipart/form-data">
                    <h2>Company Settings: </h2>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="cName">Name Of Company: </label>
                                <input type="text" name="company_name" id="cName" class="form-control" placeholder="Company Name" value="<?php echo $row['companyName']?>" required>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="cEmail">Compnay Email: </label>
                                <input type="email" name="company_email" id="cEmail" class="form-control" placeholder="Company Name" value="<?php echo $row['companyEmail']?>" required>
                            </div>
                        </div>


                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="lNews">Add a Latest news: </label>
                                        <input type="text" name="latest_news" id="lNews" class="form-control" placeholder="Latest News">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="adminName">Admin Name: </label>
                                        <input type="text" name="admin_name" id="adminName" class="form-control" placeholder="Name of Admin" value="<?php echo $row['adminName']?>"  required>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="adminUserName">Admin Username: </label>
                                        <input type="email" value="<?php echo $row['username']?>" name="username" id="adminUser" class="form-control" placeholder="Admin Username (email)"  required>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="adminPassword">Admin Password: </label>
                                        <input type="password" value="<?php echo $row['password']?>" name="password" id="adminPassword" class="form-control"  required>
                                    </div>
                                </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="cInfo">Company Informatin (to be used in about page): </label>
                    <textarea class="form-control" required placeholder="compnay information"  name="company_info" id="cInfo" cols="30" rows="10">
                    <?php echo $row['companyInfo']?>
                    </textarea>
                            </div>
                        </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <button type="submit" value="update" name="submit" class="btn btn-block btn-primary btn-lg">Update Settings</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<?php
include_once('footer.php');

?>