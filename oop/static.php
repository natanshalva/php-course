<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>  Static Function in Class  </title>
    <style>
      body {
        font-size: 25px;
      }
    </style>
  </head>

  <body>
    <?php

    class static_house {

      static $rooms = 3;
      
      static function test($var = "hello"){
        echo "{$var} rooms.";
      }

    }
    
    echo static_house::$rooms ;
    echo static_house::test() ;
    ?>

       <?php

    class static_house2 {

      static $rooms = 3;
      
      static function test($var = "hello"){
       return "static function test: "  . self::$rooms;
      }

    }
    
    echo static_house2::$rooms ;
    echo "<br>static_house2: " .  static_house2::test() ;
    ?>
    <p>----------------------------------------</p>
    <?php 
      class one {
        static protected $house = 88;
        
        static function tt(){
          echo self::$house;
        }
        
      }
      
     class two extends one {
       static public function fff(){
        echo  parent::$house = 'hhh' ;
       }
       static public function ggg(){
        echo  parent::tt();
       }
     }
      
      one::tt();
      echo "<br>";
      two::fff();
      echo "<br>";
    ?>

  </body>
</html>
