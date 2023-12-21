<?php
    define("ONE_HOUR", 60* 60* 24);

    setcookie("name", $_POST["name"], time()+ ONE_HOUR);
    setcookie("favor", $_POST["favor"], time()+ ONE_HOUR);
    setcookie("quantity", $_POST["quantity"], time()+ ONE_HOUR);
    setcookie("ValidDate", "One-Hour", time()+ ONE_HOUR);
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset = "utf-8">
      <title>Cookie Saved</title>
      <style type = "text/css">
         p { margin: 0px; }
      </style>
   </head>
   <body>
      <p>The cookie has been set with the following data:</p>
      <p>Name: <?php print( $_POST["name"] ) ?></p>
      <p>Favor: <?php print( $_POST["favor"] ) ?></p>
      <p>Qauntity: <?php print( $_POST["name"] ) ?></p>
      <p>ValidDate: <?php print( $_COOKIE["ValidDate"] ) ?></p>
      <p>Click <a href = "eatCookie.php">here</a>
         to read the saved cookie.</p>
   </body>
</html>
