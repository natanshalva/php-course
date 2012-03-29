<?php
include('./includes/db_connection.php');
include('./includes/function.php');
include('./includes/html/html_header.php');
?>
<header>
  <h1>this is the page header</h1>
</header>
<article>
  <aside>
    <ul>
      <?php
      $query = " SELECT * ";
      $query .= " FROM subject ";
    //  $query .= " WHERE subject ";
      
      $subject_set = mysql_query($query);

      // get the subject 
      while ($subject = mysql_fetch_array($subject_set)) {
        echo "<li>" . $subject['subject'] . "</li>";
          echo "<ul>";
          
        // get the pages
        $query = "SELECT * FROM pages";
        $query .=  " WHERE  subject_id = '{$subject['id']}' ";

        $result = mysql_query($query , $connection);
        
        while ($pages = mysql_fetch_array($result)) {

          echo "<li><a href='content.php?id={$pages['id']}'>" . $pages['title'] . "</a></li>";
        }
        echo "</ul>";
      }
      ?>  
    </ul>
  </aside>



</article>


<?php
include('./includes/html/footer.php');
?>