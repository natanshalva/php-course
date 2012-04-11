<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>  Access   </title>
    <style>
      body {
        font-size: 25px;
      }
    </style>
  </head>

  <body>
    <?php

    class insert_house {

      public $address;
      private $rooms;
      protected $windows;
      var $size;
      var $price = 100000;
      
      function test(){
       $re =  $this->address . "<br>";
       $re .=  $this->rooms . "<br>";
       $re .=  $this->windows . "<br>";
       return $re;
      }

    }//end of the class insert_house      
    
    
    $insert_house = new insert_house();
    $insert_house->address = 2;
   // $insert_house->rooms = 3;
   // $insert_house->windows = 2;
    
    echo $insert_house->test();
    
    
    
    ?>

    

  </body>
</html>
