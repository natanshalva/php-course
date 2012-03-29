<?php

$server = "localhost";
$username  = "root";
$password = "";
$database_name = "php_course";

$connection = mysql_connect($server, $username, $password);
if(!$connection){
  exit("no db connection: " . mysql_error() );
}

$db = mysql_select_db($database_name, $connection);
if (!$db) {
  die('database connction failed' . mysql_error());
}
?>