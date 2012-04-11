<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>  Class inheritance  </title>
    <style>
      body {
        font-size: 25px;
      }
    </style>
  </head>

  <body>
    <?php
    class house {
      var $rooms = 3; 
      var $size = 100;
      
      function housepro(){
      $house_p =  "Rooms: " . $this->rooms;
      $house_p .=  "<br>";
      $house_p .=  "Size: " .$this->size ;
       return $house_p;
      }
    }
    
    class smallHouse extends house {
      
    }
    
    $house = new house();
    $house->rooms = 7 ;
    $house->size = 400;
    $var = $house->housepro();
    echo $var;
    echo "<br>";
    // the second class 
    
    $house = new smallHouse();
    $house->rooms ;
    $house->size;
    $var = $house->housepro();
    echo $var;
    ?>

  </body>
</html>

