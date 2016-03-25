$(document).ready(function() {
    $.address.change(function(event) {
        console.log("muutus");
        console.log("laeb tabeli " + event.value.split("/")[1]);
        load_data_ajax(event.value.split("/")[1], "http://localhost:8080/index.php");
    });

    $(".categoryButton").click(function() {
        $.address.value($(this).attr('id'));
    });
});