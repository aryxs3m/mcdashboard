
function sendRcon(command, button = null) {

    if (button) {
        button.prop("disabled", true);
    }

    $.ajax({
        method: "POST",
        url: "api.php",
        data: { request:"rcon", command:command }
    })
        .done(function( msg ) {
            if (button) {
                button.prop("disabled", false);
                button.addClass("btn-outline-success");
                setTimeout(function(){
                    button.removeClass("btn-outline-success");
                }, 1000);
            }
        })
        .fail(function( msg ) {
            if (button) {
                button.prop("disabled", false);
                button.addClass("btn-outline-danger");
                setTimeout(function () {
                    button.removeClass("btn-outline-danger");
                }, 1000);
            }
            console.log(msg);
            $("#logplace").prepend("<p class='alert alert-danger'><strong>ERROR: </strong> "+msg.responseText+"</p>");
        });

}

$(document).ready(function(){

    $(".btn-rcon-easy").click(function(){
        var command = $(this).data("command");
        sendRcon(command, $(this));
    });

    $("#button-say").click(function(){
        sendRcon("say " + $("#say_box").val());
    })

    $("#button-exec").click(function(){
        sendRcon($("#command_box").val());
    })

    $(".btn-moderate").click(function(){
        sendRcon($(this).data('command') + " " + $("#kbu_player_name").val());
    })

});