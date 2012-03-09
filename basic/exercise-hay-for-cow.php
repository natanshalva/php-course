
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>  Exercise - hatzir </title>
    <style>
      body {
        font-size: 25px;
      }
      div{
        margin: 50px 0;
      }
      span {
        color: red;
      }
    </style>
  </head>

  <body>
    <form action="" method="post" >
      <div>Number of cows: <input type="text" name="num_caw"/></div>
      <div>Amount of hay per cow: <input type="text" name="hay"/></div>
      <input type="submit" value="Calculat">
    </form>
    <div></div>
    <?php 
      
      $num_caw = $_POST['num_caw'];
      $num_hay = $_POST['hay'];
      
      echo "The number of cow in the herd is: " . $num_caw . ".<br>";
      echo "The weekly hay per cow per is: " .  $num_hay . ".<br>";
      
      // hay per year 
      $hay_year = $num_hay * 52;
      echo "The yearly pack of hay per cow is:  " .  $hay_year . ".<br>";
    
      // hay per herd
      $hay_herd =  $hay_year * $num_caw;
      echo "The yearly cost of hay for all the herd is:  " .  $hay_herd . ".<br>";
      
      
      $cost =  $hay_herd * 10;
      echo "The cost of hay per herd is: <span> " . $cost . "$.</span> <br>";
    ?>
    </div>
</body>
</html>
