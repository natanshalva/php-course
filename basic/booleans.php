
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>booleans </title>
    <style>
      body {
        font-size: 25px;
      }
    </style>
  </head>

  <body>
    <h2>booleans</h2>
    <?php
    
   $var = NULL;
   
   echo var_dump($var);
    
    ?>
    <br />
    --- 
    
    <br />

    
    <form action="" method="post">
    <input type="text" name="text" >
    <input type="submit" name="su" >
    </form>
    <br />
    <?php 
    
     
    // $text = "no date was enter.";
   //  
   //  $text = "";
    
     
      if(!empty($tdsfsdfsdf)){
        
        $text = $_POST['text'];
        echo  "var dump: " . var_dump($text) ;
       
      }
    
  //    echo $tdsfsdfsdf;
    ?>
    <br>
    <br>
    <br>
    <br>
    <a href="http://www.php.net/manual/en/ref.var.php"  target="_blank">Variable handling Functions</a>
  </body>
</html>
