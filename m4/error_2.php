<?php

// create custom error handler "customError"
function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr";
}

// set PHP error handler to "customError"
set_error_handler("customError");

// trigger an error in PHP
echo($does_not_exist);
