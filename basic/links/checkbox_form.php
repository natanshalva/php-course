<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Checkbox to array  </title>
    <style>
      body {
        font-size: 25px;
      }
    </style>
  </head>

  <body>
    <h3>Checkbox to array </h3>

    <form action="" method="post">
      <p>Name: <input  type="text" name="name"></p>
      <p>fat: <input type="checkbox" name="arr[]" value="fat"></p>
      <p>tall: <input type="checkbox" name="arr[]" value="tall"></p>
      <p>nice: <input type="checkbox" name="arr[]" value="nice"></p>
      <p>funny: <input type="checkbox" name="arr[]" value="funny"></p>
      <p>long hair: <input type="checkbox" name="arr[]" value="long hair"></p>
      <p>nice legs: <input type="checkbox" name="arr[]" value="nice legs"></p>

      <p><input type="submit" name="form_submit" </p>
    </form>

    <?php
    if (isset($_POST['form_submit'])) {
      $arr=$_POST["arr"] ;
      print_r($arr);
    }
    ?>


    <br />
    <br />
    <a href="http://www.php.net/manual/en/array.sorting.php"  target="_blank">Array Functions</a>
  </body>
</html>
