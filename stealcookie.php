<html>
  <head>
    <title>Hello there</title>
  </head>
  <body>
    <?php
      $c = $_GET["stealcookie"];
      document.body.appendChild($c);
      fclose($f);
    ?>
  </body>
</html>
