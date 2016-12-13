<?php

if(!isset($_SESSION["erabiltzailea"])) {

    echo "<img style='width: 50%;' alt='logo' src='../img/goiburua.png' onclick=\"location.href='../index.php';\"/>
          <div class='userBtnDiv'> 
                <button class='userBtn' type='button' onclick=\"location.href='../php/login.php';\">Login</button>            
                <button class='userBtn' type='button' onclick=\"location.href='../php/signup.php';\">Sign Up</button>
          </div>";
}
else {
    echo "<img style='width: 50%;' alt='logo' src='../img/goiburua.png' onclick=\"location.href='../index.php';\"/>
          <div class='userBtnDiv'> 
                <label>Kaixo ". $_SESSION["erabiltzailea"] ." :)</label>
                <button class='userBtn' type='button' onclick=\"location.href='../php/logout.php';\">Irten</button>
          </div>";
}
?>