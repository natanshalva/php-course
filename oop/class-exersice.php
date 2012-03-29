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

    class insert_house {

      var $address = null;
      var $rooms = 2;
      var $windows;
      var $size;
      var $price = 100000;

      // check if the name is to long
      function test() {
        $t = 5 ;
        if (strlen($this->address) > 20) {
          $mes = "oopsss , The adderrs is to long";
          return $mes;
        } else {
          return $this->address;
        }
      }

      // check if the rooms number is more the 3 - if yes then it is big house
      function rooms() {
        if ($this->rooms > 3) {
          $ro = "Rooms number: " . $this->rooms . " <span>Big! </span>";
         
        } elseif ($this->rooms == 5) {
          $ro =  "<span>Extra Big! </span>" . $this->rooms;
        } else {
          $ro = "rooms: {$this->rooms} ";
        }
        return $ro;
      }

      // check if the we have more the three windows for room 
      // check if the size of the house if more then 100 -
      // check and print price and price per mitter
    }
    ?>
    <form action="" method="post">
      <p>address <input name="address"></p>
      <p>rooms <input name="rooms"></p>
      <p>windows <input name="windows"></p>
      <p>size <input name="size"></p>
      <p>price <input name="price"></p>
      <input  type="submit" name="send">
    </form>

    <?php
    if (isset($_POST['send'])) {
      $house = new insert_house();
      $house->address = $_POST['address'];
      $house->rooms = $_POST['rooms'];
      $house->windows = $_POST['windows'];
      $house->size = $_POST['size'];
      $house->price = $_POST['price'];

      echo $house->test();
      echo "<br>";
      echo $house->rooms();
    }
    ?>
  </body>
</html>
