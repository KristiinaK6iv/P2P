function addmsg(msg){
    /* Simple helper to add a div.
     type is the name of a CSS class (old/new/error).
     msg is the contents of the div */
    $("#total").html(msg);
}

function waitForMsg(){
    /* This requests the url "msgsrv.php"
     When it complete (or errors)*/
    $.ajax({
        type: "GET",
        url: "/index.php/Poll/msg",

        async: true, /* If set to non-async, browser shows page as "Loading.."*/
        cache: false,
        timeout:50000, /* Timeout in ms */

        success: function(data){ /* called when request to barge.php completes */
            addmsg(data); /* Add response to a .msg div (with the "new" class)*/
            setTimeout(
                waitForMsg, /* Request next message */
                5000 /* ..after 1 seconds */
            );
        },
        error: function(XMLHttpRequest, textStatus, errorThrown){
            addmsg(textStatus + " (" + errorThrown + ")");
            setTimeout(
                waitForMsg, /* Try again after.. */
                15000); /* milliseconds (15seconds) */
        }
    });
};

$(document).ready(function(){
    waitForMsg(); /* Start the inital request */
});