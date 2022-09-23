document.getElementById("country").addEventListener("change", function () {
    var country_id = document.getElementById("country").value;
    var city_null =
        '<option value="0" selected="selected">Select city</option>';
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("state").innerHTML = this.responseText;
        document.getElementById("city").innerHTML = city_null;
    };
    xhttp.open("POST", "/state?country_id=" + country_id, true);
    xhttp.send();
});

document.getElementById("state").addEventListener("change", function () {
    var state_id = document.getElementById("state").value;
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("city").innerHTML = this.responseText;
    };
    xhttp.open("POST", "/city?state_id=" + state_id, true);
    xhttp.send();
});
