<!DOCTYPE html>
<html>
  <head>
    <?php
      $title = "";
      require($_SERVER["DOCUMENT_ROOT"] + "/page-struct/html-head.php");
    ?>
  </head>

  <body>
    <!-- header -->
    <header>
      <?php require($_SERVER["DOCUMENT_ROOT"] . "/page-struct/header.php"); ?>
    </header>
    <!-- /header -->

    <!-- content -->
    <main>

    </main>
    <!-- /content -->

    <!-- footer (sticky) -->
    <footer>

    </footer>
    <!-- /footer -->

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script>
      $(document).ready(function() {
        $(".button-collapse").sideNav();
      });
    </script>
  </body>
</html>
