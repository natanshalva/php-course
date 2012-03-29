<?php

require_once 'header.php';
session_start();
unset($_SESSION['name']);
print_r($_SESSION);
?>
