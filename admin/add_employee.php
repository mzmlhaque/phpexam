<?php
/**
 * Created by PhpStorm.
 * User: SERAC-Bangladesh
 * Date: 11/29/2015
 * Time: 8:11 PM
 */
include_once('header.php');
?>

<section id="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form action="../process.php" method="post" enctype="multipart/form-data">
                    <h2>Add Employee System</h2>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <input type="text" name="name" id="first_name" class="form-control input-lg" placeholder="Name" tabindex="1" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="3" required onkeyup="ajax_email_check('../process.php?email_check=' + this.value)">
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" id="address" class="form-control input-lg" placeholder="Address" tabindex="4" required>
                    </div>
                    <div class="form-group">
                        <select name="designations" id="designations" class="form-control" required>
                            <option value="" selected>--Select Designation--
                                <?php
                                $sql="SELECT designations FROM settings;";
                                $data = $dbcon->query($sql);
                                while($row = $data->fetch(PDO::FETCH_ASSOC)){
                                    $designations = $row['designations'];
                                    if($designations!=''){
                                        echo "<option value='$designations''>$designations</option>";
                                    }
                                }
                                ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <select name="department" id="department" class="form-control" required>
                            <option value="" selected>--Select Department--
                                <?php
                                $sql="SELECT departments FROM settings;";
                                $data = $dbcon->query($sql);
                                while($row = $data->fetch(PDO::FETCH_ASSOC)){
                                    $departments = $row['departments'];
                                    if($departments !=''){
                                        echo "<option value='$departments'>$departments</option>";
                                    }
                                }
                                ?>

                        </select>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <span>Password</span>
                                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="6" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <span>Date of Birth</span>
                                <input class="form-control" type="date" id="datepicker" name="dob" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <p>Profile Picture(300x300)</p>
                                <input type="file" name="image" required>
                                <input type="hidden" name="e_id" value="<?php echo time()?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-3 col-md-3">
                        <span class="button-checkbox">
                            <button type="button" class="btn" data-color="info" tabindex="7">Agreement</button>
                            <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
                        </span>
                        </div>
                    </div>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-md-6"> <input id="submit" type="submit" name="submit" value="Register" class="btn btn-primary btn-block btn-lg"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
    include_once('footer.php');
?>
