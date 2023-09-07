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