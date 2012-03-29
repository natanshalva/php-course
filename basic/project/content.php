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
      // Mack Query to db and set new subgect_set var 
      $subject_set = mysql_query($query);
      // test to mack shure we have connection to db
      connection_with_db($subject_set);

      // get the subject 
      while ($subject = mysql_fetch_array($subject_set)) {
        echo "<li>" . $subject['subject'] . "</li>";
        echo "<ul>";

        // get the pages
        $query = "SELECT * FROM pages";
        $query .= " WHERE  subject_id = '{$subject['id']}' ";

        $pages_set = mysql_query($query, $connection);

        connection_with_db($pages_set);

        while ($pages = mysql_fetch_array($pages_set)) {

          echo "<li><a href='content.php?id={$pages['id']}'>" . $pages['title'] . "</a></li>";
        }
        echo "</ul>";
      }
      ?>  
    </ul>
  </aside>
  <div class="cen">
    <h2><?php
      // get the page title 
      $id = $_GET['id'];
        // get the pages
        $query = "SELECT * FROM pages ";
        $query .= " WHERE  id = '{$id}' ";
        
        $title_set = mysql_query($query);
        
        $pages_title = mysql_fetch_array( $title_set) ;
          echo $pages_title['title'];
      
      ?></h2>

  </div>
</article>


<?php
include('./includes/html/footer.php');
?>