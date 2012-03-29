
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Array Functions </title>
    <style>
      body {
        font-size: 25px;
      }
    </style>
  </head>

  <body>
    <?php
    $arr = array(4555556, 555555555, 46487987, 2);
    //sort($var);
    print_r($arr);
    echo "<br>";
    sort($arr);
    //$natan = $var;
    print_r($arr);
    echo "<br>";
    echo $arr[0];
    ?>
    <br />
    <br />
    <?php
    // in_array — Checks if a value exists in an array
    $os = array("Mac", "NT", "Irix", "Linux");
    if (in_array("Irix", $os)) {
      echo "Got Irix";
    }
    if (in_array("mac", $os)) {
      echo "Got mac";
    }
    ?>
    <br />
    <br />
    <?php
    //array_push — Push one or more elements onto the end of array
    $stack = array("orange", "banana");
    array_push($stack, "apple", "raspberry");
    print_r($stack);
    ?>
    <br />
    <br />
    <?php
    //count — Count all elements in an array, or something in an object
    
    $a[0] = 1;
    $a[1] = 3;
    $a[2] = 5;
    $result = count($a);
// $result == 3

    $b[0] = 7;
    $b[5] = 9;
    $b[10] = 11;
    $result = count($b);
// $result == 3
    echo "result: " .$result;
    ?>
 


    <br />
    <br />
    <a href="http://www.php.net/manual/en/array.sorting.php"  target="_blank">Array Functions</a>
  </body>
</html>
