$("form").submit(function (e) {
    var error = "";
    if ($("#name").val() == "")
        error += "Please enter your name<br>";
    if ($("#email").val() == "")
        error += "Please enter your email address<br>";
    if($("#subject").val() == "")
        error += "The Subject field is required<br>";
    if ($("#body").val() == "")
        error += "Content is required<br>";
    if (error != "") {
        $("#error").html('<div class="alert alert-danger" role = "alert"><strong>There were error(s) in your form:</strong><br>' + error + '</div>');
    }
});
