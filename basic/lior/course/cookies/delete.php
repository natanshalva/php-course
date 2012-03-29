<?php

require_once 'header.php';
setcookie("Test", "DODO", time()-10);
print_r($_COOKIE);

?>
