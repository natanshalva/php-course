<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>second page </title>
    <style>
      body {
        font-size: 25px;
      }
    </style>
  </head>

  <body>
    <h3>second page</h3>
    <a href="first.php?id=1&category=doogs">first page</a>
    <br />
    <?php 
    // get ths id from the url
     $id = $_GET['id'];
     $category = $_GET['category'];
     echo "the id is: " . $id . "<br />"; 
     echo "the id is: " . $category . "<br />"; 
    ?>

  </body>
</html>
