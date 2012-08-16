<?php
$server = "localhost";
$username = "root";
$password = "";
$database_name = "php_course";

// 1 - database connection
$connection = mysql_connect($server, $username, $password);
if (!$connection) {
  die('cant connecto to the database' . mysql_error());
}
// Hebrew need this:  
mysql_query("SET NAMES 'utf8'");
// 2 Select the database to use
$db = mysql_select_db($database_name, $connection);
if (!$db) {
  die('database connction failed' . mysql_error());
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Database Connection  </title>
    <style>
      body {
        font-size: 25px;
      }
    </style>
  </head>

  <body>
    <h3>Database Connection </h3>

    <?php
    // 3 database query 
    $result = mysql_query(
            "SELECT name FROM first"
            , $connection);
    if (!$result) {
      die(' database query failed: ' . mysql_error());
    }
     
    // see what $result is with var_dump
    //  var_dump($result);
    
    // 4 -  get the resource and put it in to array

    while ($row = mysql_fetch_array($result)) {
      // echo $row["id"] . "<br>";
      echo $row["name"] . "<br>";
      // echo $row["content"] . "<br>";
    }
    ?>

  </body>
</html>
<?php
// 5 close connection
mysql_close($connection);
?>