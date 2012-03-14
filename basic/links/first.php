
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>first page  </title>
    <style>
      body {
        font-size: 25px;
      }
    </style>
  </head>

  <body>
    <h3>first page </h3>
    <a href="second.php?id=2&category=dogs">Second page</a>
    <br />
    <?php 
    // get ths id from the url
     $id = $_GET['id'];
     echo "the id is: " . $id; 
    ?>
   

  </body>
</html>
