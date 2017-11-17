<?php

// create custom user error handler "customError"
function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr<br />";
  echo "Terminating script...";
  die();
}

// set PHP error handler to "customError"
set_error_handler("customError", E_USER_WARNING);

// trigger a user error in PHP
$int = 2;
if ($int > 1) {
  trigger_error("Value of \$int must be 1 or less.", E_USER_WARNING);
}
