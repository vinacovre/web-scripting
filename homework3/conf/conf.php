<?php
//
// Defining project's contants
//
define("DB", "blog");
define("SERVERNAME", "127.0.0.1");
define("USER", "root");
define("PASSWORD", "0263");
//
// Loading project's classes
//
function autoloader($class) {
    include 'classes/' . $class . '.class.php';
}
spl_autoload_register('autoloader');
// Function created to make debug process simpler
function pr($value) {
  echo '<pre>';
  print_r($value);
  echo "</pre>";
}
?>
