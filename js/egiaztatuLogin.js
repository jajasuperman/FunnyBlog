function egiaztatuLogin() {
    var erabil = document.getElementById("erabiltzailea").value;
    var pass = document.getElementById("pasahitza").value;
    
    if(erabil == '' || erabil.length == 0) {
        alert("Ez duzu erabiltzailea sartu");
        return false;
    }
    else if (pass == '') {
        alert("Ez duzu pasahitza sartu");
        return false;
    }
    else {
        return true;
    }
    
}