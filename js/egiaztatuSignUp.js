function egiaztatuSignUp() {
    var erabil = document.getElementById("erabiltzailea").value;
    var email = document.getElementById("email").value;
    var pass = document.getElementById("pasahitza").value;
    var pass2 = document.getElementById("pasahitza2").value;
    
    if(erabil == '' || erabil.length == 0) {
        alert("Ez duzu erabiltzailea sartu");
        return false;
    }
    else if(email == '' || email.length == 0) {
        alert("Ez duzu emaila sartu");
        return false;
    }
    else if (pass == '') {
        alert("Ez duzu pasahitza sartu");
        return false;
    }
    else if(pass.length < 6) {
        alert("Pasahitza laburra. 6 karaktere minimo.");
        return false;
    }
    else if(pass !== pass2) {
        alert("Pasahitzak ez dira berdinak. Berriz sar itzazu.");
        return false;
    }
    
    else {
        return true;
    }    
}