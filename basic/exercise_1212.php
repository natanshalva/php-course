
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>String Function </title>
    <style>
      body {
        font-size: 25px;
      }
      
    </style>
  </head>

  <body>
    Exercise number:  1212.
  <form action="" method="post" >
   <p>Text: <textarea rows="2" cols="20" name="text"></textarea></p>
<!--   <p>Word to trim form: <input type="text" name="word" ></p>-->
    <input type="submit" value="Trim">
  </form>
      
    
     <?php
     //check if the text is not empy
     if(!empty($_POST['text']) ){
       // get the text from the form
       $text = $_POST['text'];
       //$word = $_POST['word'];
      // echo $text . "<br>"; 
      // echo $word; 
       echo "The origenl text: " .  $text . "<br>";
       echo "the text length is: " . strlen($text). "<br>";
      // trim — trim part of a srting
      $trim_text = trim($text);
     
      echo 'trim: |' .  $trim_text . "|end.<br>";
      echo "the text length is: " . strlen($trim_text). "<br>";
       
     }
     
    ?>
   
  
  </body>
</html>
