function iruzkinakIkusi() {                
    if($('#gezia').attr('alt') == "arrow_down") {
        $.post("../php/iruzkinakIkusi.php", {berriaID: parseInt((window.location.pathname).charAt(22))},  function(data){    
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