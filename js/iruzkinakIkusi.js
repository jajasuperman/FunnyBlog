function iruzkinakIkusi() {    
    // jQuery bidez AJAX post bat egin
    if($('#gezia').attr('alt') == "arrow_down") {
        // berriaID parametroa post bidez pasa
        $.post("../php/iruzkinakIkusi.php", {berriaID: parseInt((window.location.pathname).charAt(12))},  function(data){    
            // iruzkinakIkusi elementuko baloreak iruzkinak div-ean gorde
            $("#iruzkinak").html(data);
        });
        $('#gezia').attr('src','../img/arrow_up.png');
        $('#gezia').attr('alt','arrow_up');
    }
    else {
        $("#iruzkinak").html("");
        $('#gezia').attr('src','../img/arrow_down.png');
        $('#gezia').attr('alt','arrow_down');
    }
}