<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title> Post  </title>
  <style>
    body {
    font-size: 25px;
    }
  </style>
    
  </head>
  <body>
    <form method="post" action=""  >
      <p>name: <input name="num" ></p>    
      <p> password: <input name="num2" ></p>  
      <p><input type="submit"></p>  
    </form>
    <div>
      <?php
      $var = $_POST['num'];
      $var2 = $_POST['num2'];
      echo $var . " " . $var2;
      ?>
    </div>
  </body>
</html>
