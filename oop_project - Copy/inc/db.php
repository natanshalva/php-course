<?php

class db {
  public $server = "localhost";
  public $username = "root";
  public $password = "";
  public $db = "oop";
  
  private $connection;
  
  function __construct() {
    $this->open_connection_db();
  }

  public function open_connection_db() {
    // 1 - database connection
    $this->connection = mysql_connect($this->server, $this->username,$this->password);
      if (!$this->connection) {
      die('cant connecto to the database' . mysql_error());
      }else{
      $db = mysql_select_db($this->db, $this->connection);
      if (!$db) {
      die('database connction failed' . mysql_error());
      }
    }
  }
  public function close_connnecion_db(){
    // 5 close connection
    if(isset($this->connection)){
      mysql_close($this->connection);
      unset ($this->connection);
    }
  }
  public function query($sql){
    // 3 database query 
    $result = mysql_query($sql, $this->connection);
    if (!$result) {
      die(' database query failed: ' . mysql_error());
    }
    return $result;
  }
}
$db = new db;

?>
