<?php

if(!isset($_SESSION["erabiltzailea"])) {

    echo "<header class='main' id='h1'>
            <img style='width: 50%;' alt='logo' src='../img/goiburua.png' onclick=\"location.href='../index.php';\"/>
            <div class='userBtnDiv'> 
                <button class='userBtn' type='button' onclick=\"location.href='../php/login.php';\">Login</button>            
                <button class='userBtn' type='button' onclick=\"location.href='../php/signup.php';\">Sign Up</button>
            </div>
        </header>";
}
else {
    echo "<header class='main' id='h1'>
            <img style='width: 50%;' alt='logo' src='../img/goiburua.png' onclick=\"location.href='../index.php';\"/>
            <div class='userBtnDiv'> 
                Kaixo". $_SESSION["erabiltzailea"] .":)
            </div>
        </header>";
}
?>