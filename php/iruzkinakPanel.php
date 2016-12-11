<?php

echo "<div class='box iruzkina'>            
        <table>
            <tr>
                <td>
                    <h2>
                        IRUZKINAK
                    </h2>
                </td>
                <td style='vertical-align: middle; height: 100%;'>
                    <img id='gezia' src='../img/arrow_down.png' alt='arrow_down' onclick='iruzkinakIkusi();'
                         style='width: 40%;'/>
                </td>
            </tr>
        </table>
    </div>

    <div id='iruzkinak'></div>";

if(isset($_SESSION['erabiltzailea'])) {
    echo "<div id='iruzkinBerria' class='box comment'>                
            <form name='iruz' id='iruz' method='post' enctype='multipart/form-data' action='".$_SERVER['REQUEST_URI']."'>
                <p class='lead emoji-picker-container'>
                    <textarea name='id1' class='form-control textarea-control' rows='3' placeholder='Iruzkina idatzi...' data-emojiable='true' data-emoji-input='unicode'></textarea>
                </p>
                <input class='userBtn' name='submit' value='Bidali' type='submit'>
            </form>            
        </div>";
}
else {
    echo "<div id='iruzkinBerria' class='box comment'>                
            <p>
                Iruzkinak idazteko <a href='../php/signup.php'>kontua sortu</a> edo <a href='../php/login.php'>kautotu</a> zaitez.
            </p>           
          </div>";
}
?>