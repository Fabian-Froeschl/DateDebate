document.getElementById('sendUsername').addEventListener('click', () => {
    let username = document.getElementById('name').value;
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