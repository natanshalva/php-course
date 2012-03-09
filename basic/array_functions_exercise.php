
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Array Functions Exercise </title>
    <style>
      body {
        font-size: 25px;
      }
    </style>
  </head>

  <body>
    <h3>Array function exercise </h3>

    <?php
//    if (isset($_POST['form_submit'])) {
//
//      $name = NULL;
//      $family = NULL;
//      $phone = NULL;
//
//      if (!empty($_POST['name'])) {
//        $name = $_POST['name'];
//      }
//      if (!empty($_POST['family'])) {
//        $family = $_POST['family'];
//      }
//      if (!empty($_POST['phone'])) {
//        $phone = $_POST['phone'];
//      }
//
//      $arr = array();
//      $arr["name"] = $name;
//      $arr["famely"] = $family;
//      $arr["phone"] = $phone;
//
//      foreach ($arr as $key => $t) {
//        echo $key . " -> " . $t . "<br />";
//      }
//      echo "count: " . count($arr) . "<br />";
//
//      sort($arr) . "<br />";
//
//      foreach ($arr as $key => $t) {
//        echo $key . " -> " . $t . "<br />";
//      }
//    }
//    ?>

    <form action="" method="post">
      <p>Name: <input  type="text" name="name"></p>
      <p>family: <input  type="text" name="family"></p>
      <p>phone: <input  type="text" name="phone"></p>

      <p><input type="submit" name="form_submit" </p>
    </form>

    <br />
    <br />
    <h3>raz</h3> 
    //<?php
    $arr = array("raz", "danny", "yuval", "or", "shunit");

    foreach ($arr as $k => $v) {

      echo $k . " -> " . $v;
    }
    $name = array_shift($arr);

    echo "<br>";

    foreach ($arr as $k => $v) {

      echo $k . " -> " . $v;
    }

    echo "<br><h1>raz 2 </h2>";

$arr = array("raz", "danny", "yuval", "or", "shunit");
    print_r($arr);
    echo "<br />";
     echo "==================== <br />" ;
    print_r($arr);
$arr = array("raz", "danny", "yuval", "or", "shunit");
 echo "<br> the name is: " . $name ;
 
 while (!empty($arr)) {

     foreach ( $arr as $v ) {
       echo $v . ", ";
        
    }
   echo "<br />";
   $name = array_shift($arr);
    
 }
    ?>
    <br>
    <br>
    <br>
    <br>
    
    <a href="http://www.php.net/manual/en/array.sorting.php"  target="_blank">Array Functions</a>
  </body>
</html>
