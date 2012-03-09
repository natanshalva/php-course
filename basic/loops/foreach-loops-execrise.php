
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>while - loops </title>
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
    <h3>Foreach Loops execrise </h3>
    <form action="" method="post">
      <p>Name: <input  type="text" name="name"></p>
      <p>family: <input  type="text" name="family"></p>
      <p>phone: <input  type="text" name="phone"></p>
      <p><input type="submit" name="form_submit" </p>
    </form>
    <?php
    if (isset($_POST['form_submit'])) {

      $not_filled_in = "<span>Not filled in</span>";

      if (!empty($_POST['name'])) {
        $name = $_POST['name'];
      } else {
        $name = $not_filled_in;
      }

      if (!empty($_POST['family'])) {
        $family = $_POST['family'];
      } else {
        $family = $not_filled_in;
      }

      if (!empty($_POST['phone'])) {
        $phone = $_POST['phone'];
      } else {
        $phone = $not_filled_in;
      }

      $arr = array(
          'Name: ' => $name,
          'Family name: ' => $family,
          'phone: ' => $phone
      );

      foreach ($arr as $key => $value) {
        if (strlen($value) >= 5) {
          echo "you enter long value.<br>";
        } else {
          echo $key . $value . "<br>";
        }
      }
    }
    ?>
    <br />

    <h3>replce word in string. </h3>
    <form action="" method="post">
      <p>the string: <input  type="text" name="name"></p>
      <p>the letter to replace: <input  type="text" name="family"></p>
      <p><input type="submit" name="form_submit" </p>
    </form>

    <?php
    if (isset($_POST['form_submit'])) {

      if (!empty($_POST['name'])) {
        $name = $_POST['name'];
      } else {
        $name = $not_filled_in;
      }

      if (!empty($_POST['family'])) {
        $family = $_POST['family'];
      } else {
        $family = $not_filled_in;
      }

      $arr = array($name) ;

      foreach ($arr as $va ) {

        echo $va . "<br>";
      }
    }
    ?>

    <a href="http://php.net/manual/en/control-structures.while.php"  target="_blank">while loops</a>
    <br />
    <br />



  </body>
</html>
