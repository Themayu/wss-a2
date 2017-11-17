<?php

// create custom error handler "customError"
function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr<br />";
  echo "The error has been logged.";
  error_log("[" . date(DATE_RSS) . "] Error: [$errno] $errstr" . chr(13) . chr(10), 3, "logs/myerrors.log");
}

// set PHP error handler to "customError"
set_error_handler("customError");

// trigger a user error in PHP
$int = 2;
if ($int > 1) {
  trigger_error("Value of \$int must be 1 or less.", E_USER_WARNING);
}
