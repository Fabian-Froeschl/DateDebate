// var username = document.getElementById("username").value;
var username = "ka";

$.ajax(
    {
        url: 'database/scoreboard.php',
        type: 'POST',
        dataType: 'json',
        data: {usr: username},
        success: function(response){
            console.log(response);
        },
        error: function(xhr, status, error){
            console.log(error)
        }
    }
);