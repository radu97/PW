<?php
//signout.php
include 'connect.php';
include 'header.php';

echo '<h2>Sign out</h2>';

//check if user if signed in
if($_SESSION['signed_in'] == true)
{
	//unset all variables
	$_SESSION['signed_in'] = false;
	$_SESSION['user_name'] = NULL;
	$_SESSION['user_id']   = NULL;
	$_SESSION['user_level'] = NULL;
	echo '<script type="text/javascript"> $("#menu").load("header.php #menu"); </script>';
	echo 'Succesfully signed out, thank you for visiting.';
}
else
{
	echo 'You are not signed in. Would you <a href="signin.php">like to</a>?';
}
include 'footer.php';
?>