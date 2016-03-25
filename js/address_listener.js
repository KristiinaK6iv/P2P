$(document).ready(function() {
    $.address.change(function(event) {
<<<<<<< HEAD
        console.log("muutus");
        console.log("laeb tabeli " + event.value.split("/")[1]);
        load_data_ajax(event.value.split("/")[1], "http://localhost/P2P/index.php");
=======
        if(event.value.split("/")[1] != "") {
            load_data_ajax(event.value.split("/")[1], "http://localhost:8080/index.php");
        }
>>>>>>> 3bfa547b5da5b8a3da5b0346bc9ffebaa1194c9a
    });

    $(".categoryButton").click(function() {
        $.address.value($(this).attr('id'));
    });
});