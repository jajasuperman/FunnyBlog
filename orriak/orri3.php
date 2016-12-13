<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Bee Movie</title>        

        <link href="../css/cover.css" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />

        <link href="../css/style1.css" rel="stylesheet" />
        <link href="../css/style2.css" rel="stylesheet" />
        <link href="../css/post.css" rel="stylesheet" />

        <!-- Begin emoji-picker Stylesheets -->
        <link href="../lib/css/nanoscroller.css" rel="stylesheet" />
        <link href="../lib/css/emoji.css" rel="stylesheet" />
        <!-- End emoji-picker Stylesheets -->

        <script type="text/javascript" src="../lib/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="../js/iruzkinakIkusi.js"></script>

        <?php include '../php/iruzkinaSartu.php'; ?>

    </head>

    <body>
        <?php include '../php/goiburua.php'; ?>

        <div class="box">

            <!-- Izenburua -->
            <h2>
                Bee Movie
            </h2>

            <!-- Irudia -->
            <div style="text-align: center;">
                <img src="http://i0.kym-cdn.com/photos/images/newsfeed/001/072/913/3ab.jpg" width="400" alt="irudia"/>
            </div>

            <hr />

            <!-- Informazioa -->
            <h3>
                Info
            </h3>

            <p>
                Bee Movie (euskeraz, Erleak) 2007. urtean DreamWorks-ek sortutako animazio pelikula bat da. Interneten famatua bilakatu da pelikula honen trailer-a modifikatzea eta trailerra ez den beste zehozer bihurtzea. <br />
                Adibidez, trailerrean 'bee' esaten duten bakoitzean, trailerra azkarrago joatea edo abesti bat ipintzea. Hain famatua bilakatu da, non 24 orduko bideoak egin diren.
            </p>

            <h3>
                Bideoak
            </h3>

            <div style="text-align: center;">
                <object type="application/x-shockwave-flash" style="width:425px; height:349px;" data="https://www.youtube.com/v/E6iN6VTL7v8">
                    <param name="movie" value="https://www.youtube.com/v/E6iN6VTL7v8" />
                    <param name="allowFullScreen" value="true" />
                </object>
            </div>

            <br />

            <div style="text-align: center;">
                <object type="application/x-shockwave-flash" style="width:425px; height:349px;" data="https://www.youtube.com/v/h_nt3V7ChmQ">
                    <param name="movie" value="https://www.youtube.com/v/h_nt3V7ChmQ" />
                    <param name="allowFullScreen" value="true" />
                </object>
            </div>

            <br />

            <div style="text-align: center;">
                <object type="application/x-shockwave-flash" style="width:425px; height:349px;" data="https://www.youtube.com/v/-1awNBqLKRE">
                    <param name="movie" value="https://www.youtube.com/v/-1awNBqLKRE" />
                    <param name="allowFullScreen" value="true" />
                </object>
            </div>

        </div>

        <!-- Iruzkinak -->                
        <?php include '../php/iruzkinakPanel.php'; ?>

        <div id="validator" style="text-align: center;">
            <a href="http://validator.w3.org/check?uri=referer">
                <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" id="html" height="31" width="88" />
            </a>
            <a href="http://jigsaw.w3.org/css-validator/check/referer">
                <img src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="¡CSS Válido!" id="css" height="31" width="88"/>
            </a>
        </div>

        <!-- Begin emoji-picker JavaScript -->
        <script type="text/javascript"  src="../lib/js/nanoscroller.min.js"></script>
        <script type="text/javascript"  src="../lib/js/tether.min.js"></script>
        <script type="text/javascript"  src="../lib/js/config.js"></script>
        <script type="text/javascript"  src="../lib/js/util.js"></script>
        <script type="text/javascript"  src="../lib/js/jquery.emojiarea.js"></script>
        <script type="text/javascript"  src="../lib/js/emoji-picker.js"></script>
        <!-- End emoji-picker JavaScript -->

        <script type="text/javascript" >
            // Emoji aukeraketa
            $(function() {                
                window.emojiPicker = new EmojiPicker({
                    emojiable_selector: '[data-emojiable=true]',
                    assetsPath: '../lib/img/',
                    popupButtonClasses: 'fa fa-smile-o'
                });                
                window.emojiPicker.discover();
            });
        </script>
    </body>
</html>
