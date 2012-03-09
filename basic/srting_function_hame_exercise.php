<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>String function exercise 1214 </title>
    <style>
      body {
        font-size: 25px;
      }
    </style>
  </head>

  <body>
    <form action="" method="post">
      <p>Text:  <textarea name="text" ></textarea></p>
      <p>Take out white space: <button type="submit" name="white" >white space!</button></p>
      <p>Make every first word to uppercase : <button type="submit"  name="uppercase">uppercase !</button></p>
    <?php 
      if (!empty($_POST['text'])){
        $text = $_POST['text'];
        $text = nl2br( $text);
       // echo "The out put:<br /> $text";
        
        if (isset( $_POST['white'])){
         echo "Take out white space:<br /> " . str_replace(" ", "",  $text);
        }
         if (isset($_POST['uppercase'])  ){
          echo "Make every first word to uppercase:<br /> " . ucwords($text); 
        }
      }
    ?>
    <br />
    <br />
    <br />
    <br />
    <a href="http://www.php.net/manual/en/array.sorting.php"  target="_blank">Array Functions</a>
  </body>
</html>
