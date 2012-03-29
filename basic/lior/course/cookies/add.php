<?php

require_once 'header.php';
setcookie("Test", "GOGO", time()+60*60*24*30);
print_r($_COOKIE);
?>
