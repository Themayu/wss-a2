<html>
 <body>

  <?php

  $myfile = fopen("myfile.txt", "r") or exit("Can't open file!");

  // read and display each line of text until the end of the file
  // is found

  while (!feof($myfile))
  {
    echo fgetc($myfile) . "<br />";
  }

  fclose($myfile);

  ?>

 </body>
</html>
