<?php
include 'connect.php';
$del=$_GET['del'];
$sql = "DELETE FROM posts WHERE post_id = $del";
mysqli_select_db($db,'site');
   $retval = mysqli_query( $db, $sql );

   if(! $retval ) {
      die('Could not delete data: ' . mysqli_error($db));
   }
   //echo "Deleted data successfully\n";
   echo '<script type="text/javascript"> window.location = "topic.php?id=' . $_GET['id'] . '" </script>';
   ?>
   