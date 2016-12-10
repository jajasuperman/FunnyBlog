<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Login</title>

        <link href="../css/style1.css" rel="stylesheet" />
        <link href="../css/style2.css" rel="stylesheet" />
        
        <script src="../js/egiaztatuLogin.js"></script>

        <?php
            include 'db.php';
            
            if(isset($_POST["erabiltzailea"])) {
                require_once('recaptchalib.php');
                $privatekey = "6LdksgwUAAAAAOSoWe4y9QEuBXoQoUF2kIkFwIN8";
                $resp = recaptcha_check_answer ($privatekey,
                                                $_SERVER["REMOTE_ADDR"],
                                                $_POST["recaptcha_challenge_field"],
                                                $_POST["recaptcha_response_field"]);

                if (!$resp->is_valid) {
                    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
                         "(reCAPTCHA said: " . $resp->error . ")");
                } else {

                    $xml = '../xml/iruzkinak.xml';
                    $erabiltzaileak= simplexml_load_file($xml);

                    foreach ($erabiltzaileak->children() as $erabiltzaile) {    
                        if (($erabiltzaile->Erabiltzaile) == ($_POST["erabiltzailea"]) && ($erabiltzaile->Pasahitza) == ($_POST["pasahitza"])) {
                            session_start();
                            $_SESSION['erabiltzailea'] = $_POST["erabiltzailea"];
                            header("Location: ../test.php");
                        }
                        else{
                            echo 'MEGAERROR';
                        }
                    }
                }
            }
        ?>

    </head>

    <body>
        <table>
            <tr>
                <td width="8%">
                    <h1>
                        Login
                    </h1>
                </td>
                <td width="1%">
                    <a href="signup.php"> <button type="button">Sign Up</button> </a>
                </td>
            </tr>
        </table>

        <hr />

        <div class="login" style="margin: 0 auto; width: 50%;">
            <form id="login" method="post" enctype="multipart/form-data" name="login" onsubmit="return egiaztatuLogin()" action="login.php">
                <table>
                    <tr>
                        <td width="70%">
                            <label class="col-sm-3" for="erabiltzailea">Erabiltzailea</label>
                        </td>
                        <td width="30%">
                            <input type="text" id="erabiltzailea" name="erabiltzailea">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="pasahitza">Pasahitza</label>
                        </td>
                        <td>
                            <input type="password" id="pasahitza" name="pasahitza"><br>
                        </td>
                    </tr>
                </table>

                <div style="text-align:center;">
                    <br />
                    <?php
                    require_once('recaptchalib.php');
                    $publickey = "6LdksgwUAAAAAHqsYsNXZogHK42vrCSEfFV_xM5x"; // you got this from the signup page
                    echo recaptcha_get_html($publickey);
                    ?>

                    <br />
                    <input class="btnLogin" name="commit" value="Login" type="submit">
                    <br />
                    <br />
                    <img src="../img/213.png" alt="rex"> 
                </div>
            </form>                                    
        </div>
    </body>
</html>
