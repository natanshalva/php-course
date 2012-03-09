
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Loops - continue </title>
    <style>
      body {
        font-size: 25px;
      }
      span{
        color: red;
      }
    </style>
  </head>

  <body>
    <h3>Loops - continue-break </h3>
    <!--    <form action="" method="post">
          <p>Name: <input  type="text" name="name"></p>
          <p>family: <input  type="text" name="family"></p>
          <p>phone: <input  type="text" name="phone"></p>
          <p><input type="submit" name="form_submit" </p>
        </form>-->
    <?php
    for ($i = 0; $i < 10; $i++) {
      if ($i == 7) {
        continue;
      }

      echo $i . " , ";
    }
    ?>
    <h3>Loops - continue  2</h3>

<?php
$arr = array('aaa', 'bbb', 'ccc', 'ddd');

foreach ($arr as $value) {
  if ($value == 'bbb') {
    continue;
  }
  echo $value . "<br>";
}
?>
 <h3>Loops - break</h3>
    <?php
    $arr = array('aaa', 'bbb', 'ccc', 'ddd');

    foreach ($arr as $value) {
      if ($value == 'bbb') {
        break;
      }
      echo $value . "<br>";
    }
    ?>




  </body>
</html>
