function ajax_request(location) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            var place = document.getElementById("login");
            place.innerHTML = xhttp.responseText;
        }
    };
    xhttp.open("GET", location, true);
    xhttp.send();
}