<!DOCTYPE html>
<html>
    <head>
        <title>PHP Display Input</title>
        <link rel="stylesheet" type="text/css" href="./style.css">
    </head>

    <body>
        <div id="outer-container">
            <div id="inner-container">
                <div id="container">
                    <p>Thanks for submitting!</p>
                    <p>Your favorite food is:</p>
                    <?php
                        $favorite_food = $_POST["favorite_food"];
                        echo <<<EOS
                            <p>$favorite_food</p>
                        EOS;
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>