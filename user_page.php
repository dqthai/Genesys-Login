<html>
  <head></head>
  
  <body>
    <h3>
      <?php
        echo $_REQUEST['usernames']; 
      ?>
    </h3>
    
    <form method="POST" action="sync.php">
      <table border="0" width="60%">
        <tr><td width="30%">Name: </td><td name="syncname"><?php echo $_REQUEST['firsts']." ".$_REQUEST['lasts'] ?></td></tr>
        
      </table>
    </form>
  </body>

</html>


<?php



?>
