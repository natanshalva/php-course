
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>  Arrays  </title>
    <style>
      body {
        font-size: 25px;
      }
    </style>
  </head>

  <body>
    <?php
    // array with value
    $var = 5;
    $array = array($var, 8);
    
    echo $array[0];
    $array[0] = 'new';
    echo "<br>";
    
    $new_array[0] = "test";
    $new_array[1] = "test2";
    echo "<br>";
    
    print_r($new_array);
    echo "<br>";
    echo $new_array[1];

    // array in side array
    $var2 = array(8, array(7, 9), 19);
    $t = array("אופנוע", "מכונית");
    $tr = array("מטוס", "טיסן", $t);

    echo $tr[2][0];
    ?>

  </div>
  <div>
    This is associative array: 
    <?php
    //associative array
    $n = "natan";
    $associative_array = array('name' => $n, 'famyli' => 'shalva');
    echo $associative_array['name'];
    
    //insert array 
    $associative_array['more'] = 'Nevet';
    echo $associative_array['more'];
    
    ?>

  </div>
  <div>
    <?php // print_r() 

    $var_a = array(
    'test' => 'a',
    'test-b' => 'b'
    );
    
    $var_b = array(
    'test-c' => 'c',
    'test-b' => 'd'
    );
    
    $var_e  =  $var_a + $var_b ;
    
    echo $var_e;
    
     ?>
    
    <pre>
      this is pre tag : 
      <?php print_r($var_e); ?>
    </pre>
  </div>
</body>
</html>
