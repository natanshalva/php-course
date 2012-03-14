<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Cookies</title>
    <style>
      body {
        font-size: 25px;
      }
    </style>
  </head>

  <body>
    <h3>Set cookie</h3>
    <?php
    // we set the cookie
    $value = "this is natan cookie";
    setcookie('test', $value, time() + (60 * 60 * 24 * 7));

    // we get the cookie
    $var = $_COOKIE['test'];
    echo $var;

    // this is how we delete cookie - we set minus time 
    setcookie('test', $value, time() - (60 * 60 * 24 * 7));
    
    // best practis is to test if we have cookie - or use default value 
    
//    $value = 0 ;
//    if(isset($_cookie['test'])){
//       $var = $_COOKIE['test'];
//    }
//    echo $value;
    
    
    ?>
  </body>
</html>
