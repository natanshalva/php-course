<?php 
  session_start();
?>
<?php  

include('./includes/html/html_header.php') ;
?>
 
<?php 
echo $_SESSION['name'];
?>
  
</body>
</html>
