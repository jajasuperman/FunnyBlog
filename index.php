<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>FUNNY BLOG</title>

        <link href="css/style1.css" rel="stylesheet" />
        <link href="css/style2.css" rel="stylesheet" />
        <link href="css/post.css" rel="stylesheet" />
    </head>

    <body>
        <?php 
        session_start(); 
        if(!isset($_SESSION["erabiltzailea"])) {

            echo "<img style='width: 50%;' alt='logo' src='img/goiburua.png' onclick=\"location.href='index.php';\"/>
                  <div class='userBtnDiv'> 
                        <button class='userBtn' type='button' onclick=\"location.href='php/login.php';\">Login</button>            
                        <button class='userBtn' type='button' onclick=\"location.href='php/signup.php';\">Sign Up</button>
                   </div>";
        }
        else {
            echo "<img style='width: 50%;' alt='logo' src='img/goiburua.png' onclick=\"location.href='index.php';\"/>
                  <div class='userBtnDiv'> 
                        <label>Kaixo ". $_SESSION["erabiltzailea"] ." :)</label>
                        <button class='userBtn' type='button' onclick=\"location.href='php/logout.php';\">Irten</button>
                  </div>";
        }
        ?>

        <div class="box index" style="text-align: center;" onclick="location.href='orriak/orri1.php';">
            <h2>Lenny Face</h2>
            <div>
                <img src="http://www.lennyfaces.net/static/og-image.png" width="200" alt="irudia"/>
            </div>
        </div>
        <div class="box index" style="text-align: center;" onclick="location.href='orriak/orri2.php';">
            <h2>Yee</h2>
            <div>
                <img src="http://i3.kym-cdn.com/photos/images/newsfeed/000/823/349/06f.gif" width="200" alt="irudia"/>
            </div>
        </div>
        <div class="box index" style="text-align: center;" onclick="location.href='orriak/orri3.php';">
            <h2>Bee Movie</h2>
            <div>
                <img src="http://i0.kym-cdn.com/photos/images/newsfeed/001/072/913/3ab.jpg" width="200" alt="irudia"/>
            </div>
        </div>
        
        <div id="validator" style="text-align: center;">
            <a href="http://validator.w3.org/check?uri=referer">
                <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" id="html" height="31" width="88" />
            </a>
            <a href="http://jigsaw.w3.org/css-validator/check/referer">
                <img src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="¡CSS Válido!" id="css" height="31" width="88"/>
            </a>
        </div>
    </body>
</html>
