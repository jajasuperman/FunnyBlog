<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf8mb4" />
        <title>emoji-picker Demo</title>        

        <link href="../css/cover.css" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />

        <link href="../css/style1.css" rel="stylesheet" />
        <link href="../css/style2.css" rel="stylesheet" />
        <link href="../css/post.css" rel="stylesheet" />

        <!-- Begin emoji-picker Stylesheets -->
        <link href="../lib/css/nanoscroller.css" rel="stylesheet" />
        <link href="../lib/css/emoji.css" rel="stylesheet" />
        <!-- End emoji-picker Stylesheets -->

        <script language="JavaScript" type="text/javascript" src="../lib/js/jquery-3.1.1.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="../js/iruzkinakIkusi.js"></script>

        <?php include '../php/iruzkinaSartu.php'; ?>

    </head>

    <body>
        <header class='main' id='h1'>
            <a href="../index.html"><img style="width: 50%;" src="../img/goiburua.png" /></a>
            <div class="userBtnDiv"> 
                <a href="../php/login.php"><button class="userBtn" type="button">Login</button></a>            
                <a href="../php/signup.php"><button class="userBtn" type="button">Sign Up</button></a>
            </div>
        </header>

        <div class="box">

            <!-- Izenburua -->
            <h2>
                Dolan
            </h2>

            <!-- Irudia -->
            <div style="text-align: center;">
                <img src="http://i2.kym-cdn.com/entries/icons/original/000/003/549/image.jpeg" width="400px" alt="irudia"/>
            </div>

            <hr />

            <!-- Informazioa -->
            <h3>
                Info
            </h3>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nulla dui, gravida ac neque eu, dapibus fermentum purus. Donec molestie viverra porttitor. In ultricies, dui sit amet pellentesque mattis, sem sapien dapibus mi, quis hendrerit felis ex id turpis. Curabitur mollis dolor velit, vitae consequat leo dapibus ac. Donec sit amet ornare enim. Integer in sollicitudin elit. Sed sagittis, quam quis fringilla commodo, odio nunc pharetra ante, nec tempor augue mi eu eros. Maecenas interdum metus sit amet facilisis imperdiet. Aliquam eleifend vel dolor varius vehicula.
            </p>

        </div>

        <!-- Iruzkinak -->                
        <?php include '../php/iruzkinakPanel.php'; ?>

        <!-- Begin emoji-picker JavaScript -->
        <script src="../lib/js/nanoscroller.min.js"></script>
        <script src="../lib/js/tether.min.js"></script>
        <script src="../lib/js/config.js"></script>
        <script src="../lib/js/util.js"></script>
        <script src="../lib/js/jquery.emojiarea.js"></script>
        <script src="../lib/js/emoji-picker.js"></script>
        <!-- End emoji-picker JavaScript -->

        <script>
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
