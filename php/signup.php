<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Sign Up</title>

        <link href="../css/style1.css" rel="stylesheet" />
        <link href="../css/style2.css" rel="stylesheet" />

        <script src="../js/egiaztatuSignUp.js"></script>

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
                echo "<script type='text/javascript'>alert('reCaptcha gaizki sartu egin duzu');</script>";
            } else {

                $fitx = '../xml/erabiltzaileak.xml';

                $xml = simplexml_load_file($fitx);

                $elementua = $xml->addChild('erabiltzailea');

                $elementua->addChild('Erabiltzaile', $_POST['erabiltzailea']);
                $elementua->addChild('Emaila', $_POST['email']);
                $elementua->addChild('Pasahitza', $_POST['pasahitza']);

                $xml->asXML($fitx);

                $domxml = new DOMDocument('1.0');
                $domxml->preserveWhiteSpace = false;
                $domxml->formatOutput = true;
                /* @var $xml SimpleXMLElement */
                $domxml->loadXML($xml->asXML());
                $domxml->save($fitx);
                
                echo "<script type='text/javascript'>alert('Kontua sortu duzu!');</script>";
                header("Location: ../index.php");
            }
        }
        ?>

    </head>

    <body>
        <header class='main' id='h1'>
            <a href="../index.php"><img style="width: 50%;" src="../img/goiburua.png" /></a>
        </header>

        <table>
            <tr>
                <td width="8%">
                    <h1>
                        Sign Up
                    </h1>
                </td>
                <td width="1%">                    
                    <a href="login.php"> <button type="button">Login</button> </a>
                </td>
            </tr>
        </table>

        <hr />

        <div class="login" style="margin: 0 auto; width: 50%;">
            <form id="login" method="post" enctype="multipart/form-data" name="login" onsubmit="return egiaztatuSignUp()" action="signup.php">
                <table>
                    <tr>
                        <td width="70%">
                            <label for="erabiltzailea">Erabiltzailea</label>
                        </td>
                        <td width="30%">
                            <input type="text" id="erabiltzailea" name="erabiltzailea">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Emaila</label>
                        </td>
                        <td>
                            <input type="email" id="email" name="email"><br>
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
                    <tr>
                        <td>
                            <label for="pasahitza2">Pasahitza egiaztatu</label>
                        </td>
                        <td>
                            <input type="password" id="pasahitza2" name="pasahitza2"><br>
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
                    <input class="btnLogin" name="commit" value="Sign Up" type="submit">
                    <br />
                    <a href="login.php" style="font-weight: bold; color: black;">Kontu bat daukat dagoeneko</a>
                    <br /><br />
                    <img src="../img/3f2.jpg" alt="rex"> 
                </div>
            </form>                                    
        </div>
    </body>
</html>
