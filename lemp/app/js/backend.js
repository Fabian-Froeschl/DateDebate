let btn_before = document.getElementById('btn-before');
let btn_later = document.getElementById('btn-later');
btn_before.addEventListener('click', () => buttons(btn_before.value));
btn_later.addEventListener('click', () => buttons(btn_later.value));
function buttons(btnType){
    $.ajax(
        {
            url: 'database/gameConnection.php',
            type: 'POST',
            dataType: 'json',
            data: {btnType: btnType},
            success: function(response){
                console.log(response['leftEvent']['name']);
                document.getElementById("event-left-name").innerText = response['leftEvent']['name'];
                document.getElementById("event-left-date").innerText = response['leftEvent']['date'];
                document.getElementById("event-right-name").innerText = response['rightEvent']['name'];
                // refreshEvents();
            },
            error: function(xhr, status, error){
                console.log(error);
            }
        }
    );
}

/*Name von event bekommen

 */

// function refreshEvents(){
//      $.ajax({
//          url: 'database/gameHandler.php',
//          type: 'GET',
//          success: function(response){
//              if(response == ""){
//                  return;
//              }
//              response = JSON.parse(response);
//              console.log(response);
          
  
//              document.getElementById("event-left-name").innerText = response['message'][0]['name'];
//              document.getElementById("event-right-name").innerText = response['message'][1]['name'];
//              document.getElementById("event-left-date").innerText = response['message'][0]['date'] + " " + response['message'][0]['era'];
//              // document.getElementById("event-right-date").innerText = response['message'][1]['date'] + " " + response['message'][1]['era'];
//          },
//          error: function(xhr, status, error){
//              console.log(xhr);
//              console.log(status);
//              console.log(error);
//          }
//    });
// }

// function refreshEvents(){
//     // load left and right event from session
//     var getCookie = function(name) {
//         var cookies = document.cookie.split(';');
//         for(var i=0 ; i < cookies.length ; ++i) {
//             var pair = cookies[i].trim().split('=');
//             if(pair[0] == name)
//                 return pair[1];
//         }
//         return null;
//     };
//     console.log(document.cookie);
// }

// refreshEvents();
