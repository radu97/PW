<?php
include 'forum/connect.php';
if($_SESSION['signed_in'] == true)
{
	//unset all variables
	$_SESSION['signed_in'] = false;
	$_SESSION['user_name'] = NULL;
	$_SESSION['user_id']   = NULL;
	
	echo '<script type="text/javascript"> window.location = "index.php" </script>';
}
//include 'footer.php';
?>