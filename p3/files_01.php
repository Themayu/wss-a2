<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>myfile.txt</title>
  </head>
  <body>
    <?php
      error_reporting(E_ALL);
      $myfile = fopen("myfile.txt", "r") or exit("Can't open file!");
      fclose($myfile);
    ?>
  </body>
</html>
