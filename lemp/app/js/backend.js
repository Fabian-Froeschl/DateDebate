let btn_before = document.getElementById('btn-before');
let btn_later = document.getElementById('btn-later');
btn_before.addEventListener('click', () => buttons(btn_before.value));
btn_later.addEventListener('click', () => buttons(btn_later.value));
function buttons(btnType){
    $.ajax(
        {
            url: 'database/gameConnection.php',
            type: 'POST',
            data: {btnType: btnType},
            success: function(response){
                console.log(response);
            },
            error: function(xhr, status, error){
                console.log(error);
            }
        }
    );
}

/*Name von event bekommen

 */
$.ajax({

    url: 'database/gameHandler.php',
    type: 'GET',
    success: function(response){
        document.getElementById("event-left-name").innerHTML = response[0]['name'];
    },
    error: function(xhr, status, error){
        console.log("error!")
    }
});