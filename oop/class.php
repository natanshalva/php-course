<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>  Class  </title>
    <style>
      body {
        font-size: 25px;
      }
    </style>
  </head>

  <body>
    <?php

    class first {
      
      //var $name; 
      var $family; 
      var $number = 100 ;

       function hi(){
          echo "hi";
      }
      function full_name(){
        $name = "n";
       $shem = "name: ". $name ." " .$this->family ;
       return $shem;
      }
    }
    
    $var = new first();
    $var->hi();
    echo "<br>";
    //$var->name = "natan";
    
    $var->family = "shalva";
    $var->full_name();
    echo "<br>second: ";
    
    
    $scoend = new first();
   // $scoend->hi();
    echo "<br>";
    $scoend->name = "nevet";
    $scoend->family = "shalva";
    echo $scoend->full_name();
    
    
    ?>

  </body>
</html>
