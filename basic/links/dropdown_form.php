<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Drop down  </title>
    <style>
      body {
        font-size: 25px;
      }
    </style>
  </head>

  <body>
    <h3>Drop Down </h3>

    <form method="post" action="">
      color:   <select name="dropdown[]" value="option">
        <option>Red</option>
        <option>Green</option>
        <option>Blue</option>
      </select>
      <input type="submit" name="submit">
    </form>

    <?php
    //get the from
    if (isset($_POST['submit'])) {
      print_r($_POST);
      $arr = $_POST['dropdown'];
      foreach ($arr as $k => $v) {
        echo "$k - $v";
      }
    }
    ?>
  </body>
</html>
