<?php
// test if we have connection with are databese

function connection_with_db($var){
  if(!$var){
    exit( "We don't have connection with db: " . mysql_error());
  }
}

?>
