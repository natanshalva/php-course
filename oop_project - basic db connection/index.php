<?php

include './inc/db.php';
$sql = "INSERT INTO user ( username, password, name, family, status ) ";
$sql .= "    VALUES       (  'test', '1234', 'natan', 'shalva', '5' ) ";

$result = $db->query($sql);

?>
this is index.php
<?php 
$sql = "SELECT * FROM user";
$result_set = $db->query($sql);

while ( $row = mysql_fetch_array($result_set , MYSQL_ASSOC )){
  foreach ( $row as $key => $value) {
    echo $key . " - " . $value . "<br>";
  }
}
echo "-------<br>";
echo $db->last_query;

?>