<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>sessions</title>
    <style>
      body {
        font-size: 25px;
      }
    </style>
  </head>

  <body>
    <h3>sessions</h3>
    <?php
    $_SERVER['name'] = 'natan';
    
    $var =  $_SERVER['name'];
    
    echo $var;
    
    ?>
  </body>
</html>
