<!DOCTYPE html>
<html>
  <head>
    <title>Hello there</title>
  </head>
  <body>
    <?php
      $c = $_GET["stealcookie"];
      document.body.appendChild($c+"\n");
    ?>
  </body>
</html>
