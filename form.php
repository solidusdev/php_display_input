<!DOCTYPE html>
<html>
    <head>
        <title>PHP Display Input</title>
        <link rel="stylesheet" type="text/css" href="./style.css" />
    </head>

    <body>
        <div id="outer-container">
            <div id="inner-container">
                <form name="food_form" action="action.php" method="post">
                    <?php 
                        echo <<<EOS
                        <h2>What is your favorite food?</h2>
                        EOS;
                    ?>
                    <input type="text" name="favorite_food" required />
                    <input type="submit" value="Submit" onclick="return validate_form()" />
                </form>
            </div>
        </div>
    </body>

    <script>
        function validate_form() {
            let input_value = document.forms["food_form"]["favorite_food"].value;

            if (input_value === "") {
                alert("Must not be an empty value");
                return false;
            }
        }
    </script>
</html>