//let table = document.getElementById('scoreboardTable');

document.getElementById('userInputSubmit').addEventListener('click', () => {
    let username = document.getElementById('userInputName').value;
    if(username == "" || username == null)return;
    $.ajax(
        {
            url: 'database/scoreboard.php',
            type: 'POST',
            //dataType: 'json',
            data: {usr: username},
            success: function(response){
                //console.log(response);
                //tabelle neu generieren lassen
                //table.childNodes = new Array();
            },
            error: function(xhr, status, error){
                //console.log(error);
            }
        }
    );
    window.location.reload();
});

document.getElementById('retry').addEventListener('click', () => {
    window.location.replace("index.php");
});