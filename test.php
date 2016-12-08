<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>emoji-picker Demo</title>        
        
        <link href="css/cover.css" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />
        
        <link href="css/style1.css" rel="stylesheet" />
        <link href="css/style2.css" rel="stylesheet" />
        <link href="css/post.css" rel="stylesheet" />

        <!-- Begin emoji-picker Stylesheets -->
        <link href="lib/css/nanoscroller.css" rel="stylesheet" />
        <link href="lib/css/emoji.css" rel="stylesheet" />
        <!-- End emoji-picker Stylesheets -->

    </head>

    <body>

        <div class="box">
            <!-- Izenburua -->
            <h2>
                1. Memea
            </h2>
            <!-- Irudia -->
            <div style="text-align: center;">
                <img src="http://i0.kym-cdn.com/photos/images/newsfeed/000/115/161/936.jpg?1303162635" alt="test"/>
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

        <div class="box iruzkina">
            <h2>
                IRUZKINAK
            </h2>
        </div>

        <div class="box comment">
            <h5>
                1. Erabiltzailea
            </h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nulla dui, gravida ac neque eu, dapibus fermentum purus. Donec molestie viverra porttitor. In ultricies, dui sit amet pellentesque mattis, sem sapien dapibus mi, quis hendrerit felis ex id turpis. Curabitur mollis dolor velit, vitae consequat leo dapibus ac. Donec sit amet ornare enim. Integer in sollicitudin elit. Sed sagittis, quam quis fringilla commodo, odio nunc pharetra ante, nec tempor augue mi eu eros. Maecenas interdum metus sit amet facilisis imperdiet. Aliquam eleifend vel dolor varius vehicula.
            </p>
        </div>
        <div class="box comment">
            <h5>
                2. Erabiltzailea
            </h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nulla dui, gravida ac neque eu, dapibus fermentum purus. Donec molestie viverra porttitor. In ultricies, dui sit amet pellentesque mattis, sem sapien dapibus mi, quis hendrerit felis ex id turpis. Curabitur mollis dolor velit, vitae consequat leo dapibus ac. Donec sit amet ornare enim. Integer in sollicitudin elit. Sed sagittis, quam quis fringilla commodo, odio nunc pharetra ante, nec tempor augue mi eu eros. Maecenas interdum metus sit amet facilisis imperdiet. Aliquam eleifend vel dolor varius vehicula.
            </p>
        </div>
        
        <!-- Iruzkin berria sartzeko -->
        
        <div id="iruzkinBerria" class="box comment">
            <h5>
                Iruzkin berria sartu:
            </h5>
            <form>
                <p class="lead emoji-picker-container">
                    <textarea class="form-control textarea-control" rows="3" placeholder="Textarea with emoji Unicode input" data-emojiable="true" data-emoji-input="unicode"></textarea>
                </p>
                <button class="bidaliBtn" type="button">Bidali</button>
            </form>            
        </div>

        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <!-- Begin emoji-picker JavaScript -->
        <script src="lib/js/nanoscroller.min.js"></script>
        <script src="lib/js/tether.min.js"></script>
        <script src="lib/js/config.js"></script>
        <script src="lib/js/util.js"></script>
        <script src="lib/js/jquery.emojiarea.js"></script>
        <script src="lib/js/emoji-picker.js"></script>
        <!-- End emoji-picker JavaScript -->

        <script>
            $(function() {
                // Initializes and creates emoji set from sprite sheet
                window.emojiPicker = new EmojiPicker({
                    emojiable_selector: '[data-emojiable=true]',
                    assetsPath: 'lib/img/',
                    popupButtonClasses: 'fa fa-smile-o'
                });
                // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields
                // You may want to delay this step if you have dynamically created input fields that appear later in the loading process
                // It can be called as many times as necessary; previously converted input fields will not be converted again
                window.emojiPicker.discover();
            });
        </script>
    </body>
</html>
