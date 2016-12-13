<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>FUNNY BLOG</title>

        <link href="css/style1.css" rel="stylesheet" />
        <link href="css/style2.css" rel="stylesheet" />
        <link href="css/post.css" rel="stylesheet" />
    </head>

    <body>
        <?php 
        session_start(); 
        if(!isset($_SESSION["erabiltzailea"])) {

            echo "<header class='main' id='h1'>
                    <img style='width: 50%;' alt='logo' src='img/goiburua.png' onclick=\"location.href='index.php';\"/>
                    <div class='userBtnDiv'> 
                        <button class='userBtn' type='button' onclick=\"location.href='php/login.php';\">Login</button>            
                        <button class='userBtn' type='button' onclick=\"location.href='php/signup.php';\">Sign Up</button>
                    </div>
                </header>";
        }
        else {
            echo "<header class='main' id='h1'>
                    <img style='width: 50%;' alt='logo' src='img/goiburua.png' onclick=\"location.href='index.php';\"/>
                    <div class='userBtnDiv'> 
                        <label>Kaixo ". $_SESSION["erabiltzailea"] ." :)</label>
                        <button class='userBtn' type='button' onclick=\"location.href='php/logout.php';\">Irten</button>
                    </div>
                </header>";
        }
        ?>

        <a href="orriak/orri1.php">
            <div class="box index" style="text-align: center;">
                <h2>Mickey Trollface</h2>
                <div>
                    <img src="http://i0.kym-cdn.com/photos/images/newsfeed/000/115/161/936.jpg" width="200" alt="irudia"/>
                </div>
            </div>
        </a>
        <a href="orriak/orri2.php">
            <div class="box index" style="text-align: center;">
                <h2>Lenny Face</h2>
                <div>
                    <img src="http://www.lennyfaces.net/static/og-image.png" width="200" alt="irudia"/>
                </div>
            </div>
        </a>
        <a href="orriak/orri3.php">
            <div class="box index" style="text-align: center;">
                <h2>Dolan</h2>
                <div>
                    <img src="http://i2.kym-cdn.com/entries/icons/original/000/003/549/image.jpeg" width="200" alt="irudia"/>
                </div>
            </div>
        </a>
    </body>
</html>
