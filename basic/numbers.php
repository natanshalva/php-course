<?php 
$color = 'red';
$size = 3 ;
?>
<!DOCTYPE html>
<html>
  <head>
    <title>numbers</title>
    <style>
      body {
        color:<?php echo $color; ?> ;
        font-size:  <?php echo $size; ?>em ; 
        
      }
      
    </style>
  </head>
  <body>

    <?php
    echo 8 + 8;
    ?>
    <br>
    <?php
    $var = 10;
    $var2 = 20;
    echo 4 * $var;

    echo "<br>";

    $var += 20;
    echo $var;

    echo "<br>";
    echo $var + $var2;


    // Days that i am happy
    //day in a year 
    $happy = 5;
    $year = 365;
    $myage = 37;
    ?>
    <h1>Days that i am happy</h1>
    <p>i am happy <?php echo $happy ?> days in a year.</p>
    <p>My age is  <?php echo $myage ?>, so i leved <?php echo $myage * $year; ?> days,
    and i was happy <?php echo $happy * $myage; ?> all my life</p>
    

    <p contenteditable="true" >tests </p>
  
    <?php 
      $var = "this is " ;
      $var2 = "my site";
      $var3 = $var . $var2;
      echo $var3;
    
    ?>
    
  </body>
</html>
