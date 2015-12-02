var date = new Date();
var h = date.getHours();
var m = date.getMinutes();
var s = date.getSeconds();
var time = h + ':' + m + ':' + s;


function ajax_request(location) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            var place = document.getElementById("login");
            place.innerHTML = xhttp.responseText;
            document.getElementById("time_in").innerHTML = time;
        }
    };
    xhttp.open("GET", location, true);
    xhttp.send();

}
function ajax_email_check(location) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            var place = document.getElementById("mail_error");
            var result =  xhttp.responseText;
            var s = document.getElementById("submit");
            var s_before = 'btn btn-primary btn-block btn-lg';
            if(result !=''){
                s.className = s.className + " disabled";
                alert(result+ ' is already used. Please try with a different email address...');
            }else{
                s.className = s_before;
            }
           // place.innerHTML = xhttp.responseText;
        }
    };
    xhttp.open("GET", location, true);
    xhttp.send();

}

function ajax_employee_sort(name) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            var place = document.getElementById("employee_data");
            place.innerHTML = xhttp.responseText;
        }
    };
    xhttp.open("GET", 'employee_data.php?' + name, true);
    xhttp.send();
}

function ajax_employee_data(location) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            var place = document.getElementById("employee_data");
            place.innerHTML = xhttp.responseText;
        }
    };
    xhttp.open("GET", location, true);
    xhttp.send();
}
function ajax_employee_entry(logged,location) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            var place = document.getElementsByTagName("body");
            place.innerHTML = xhttp.responseText;
        }
    };
    xhttp.open("GET", location+'?action='+logged, true);
    xhttp.send();
}
function add_reason(){
    var action = document.getElementById('action').value;
    var reason = document.getElementById('reason');
    if(action=='time_in'){
        if(h>9 || (h==9 && m>=10)){
            reason.innerHTML = '<label for="">Reason For Late</label><br><input type="text" class="form-control" name="reason" required>';
        }

    }else{
        reason.innerHTML = '<br>';
    }
}