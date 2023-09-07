document.getElementById('sendUsername').addEventListener('click', () => {
    var username = document.getElementById('name').value;
    if(username == "" || username == null)return;
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
                console.log(error);
            }
        }
    );
});

$.ajax({

    url: 'database/gameHandler.php',
    type: 'GET',
    dataType: 'json',
    success: function(response){
        document.getElementById("test").innerHTML = response[0]['name'];
    },
    error: function(xhr, status, error){
        console.log("error!")
    }
});