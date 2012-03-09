
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
    <form action="" method="post">
      <p>Number<input type="text" name="num"></p>
      <p><input type="submit" ></p>
    </form>
    <?php
    if (!empty($_POST['num'])) {

      $var = $_POST['num'];
      //echo $var;
      switch ($var) {
        case 'test' :
          echo "var is $var <br>";
          break;
        case 1 :
          echo "var is 1 <br>";
          break;
        case 2 :
          echo "var is 2 <br>";
          break;
        default:
          echo "this is the default";
      }
    }
    ?>
    <br />



    <br />
    <br />
    <a href="http://www.php.net/manual/en/array.sorting.php"  target="_blank">Array Functions</a>
  </body>
</html>
