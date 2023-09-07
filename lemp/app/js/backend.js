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
        if(response == ""){
            return;
        }
        response = JSON.parse(response);
        console.log(response);
        

        document.getElementById("event-left-name").innerText = response['message'][0]['name'];
        document.getElementById("event-right-name").innerText = response['message'][1]['name'];
    },
    error: function(xhr, status, error){
        console.log(xhr);
        console.log(status);
        console.log(error);
    }
});