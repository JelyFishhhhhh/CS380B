<!DOCTYPE html>
<html>

    <head>

    </head>
    <body>

        <p>Your cookies</p>
        <?php
            foreach ($_COOKIE as $key => $value ){

                print( "<p>$key: $value</p>" );
            }
        ?>
    </body>
</html>