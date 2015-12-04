<?php
/**
 * Created by PhpStorm.
 * User: SERAC-Bangladesh
 * Date: 11/30/2015
 * Time: 1:58 PM
 */

include_once('header.php');

if(isset($_GET['leave_status']) && $_GET['leave_status'] == 'updated'){
    echo("<script>alert('Successfully Updated')</script>");
}
?>


<div class="container">
    <div class="row">
        <div class="col-xs-5 col-xs-offset-3"><br><br><br>
            <form action="leave_manage_action.php" method="POST" role="form">
                <div class="form-group">
                    <label for="employee_leave_id">Employee Id: </label>
                    <input type='text' id="employee_leave_id" class="form-control" name='e_id' onkeyup="ajax_employee_leave_manage(this.value)"><br>
                    <div id="employee_leave_remaining">
                        <label for="leave_name">Employee Name: </label>
                        <input type='text' id="leave_name" class="form-control" disabled value='' name='name'><br>
                        <label for="leave_remaining_update">Remaining Leave</label>
                        <input type='text' id="leave_remaining_update" disabled class="form-control" value='' name='$leave_remaining'><br>
                    </div>
                    <button class="btn btn-primary" type="submit" value="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
include_once('footer.php');

?>