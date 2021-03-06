<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Screen Example</title>
  </head>
  <body>
    <!-- header -->
    <header>
      <nav>
        <div class="nav-wrapper container">
          <a href="#" class="brand-logo">Jamie Ridding</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="https://github-college.github.io/web-server-scripting-Themayu/" target="_blank">Assignment 1</a></li>
            <li class="active"><a href="../p2/getscreen.html" target="_blank">P2</a></li>
            <li><a href="../p3/upload_03.html" target="_blank">P3</a></li>
            <li><a href="../p4/login.php" target="_blank">P4</a></li>
            <li><a href="../p5/guestbook.html" target="_blank">P5</a></li>
            <li><a href="../m2/create_contact.html" target="_blank">M2</a></li>
            <li><a href="../m3/login.php" target="_blank">M3</a></li>
            <li><a href="../m4/error_4.php" target="_blank">M4</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- /header -->

    <!-- content -->
    <main class="container">
      <p><?php
        $browser = $_SERVER["HTTP_USER_AGENT"];
        echo "Your browser is: $browser";
      ?></p>
    </main>
    <!-- /content -->
  </body>
</html>
