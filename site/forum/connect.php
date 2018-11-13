<?php 
session_start();
//connect.php
$server	    = 'localhost:3306';
$username	= 'radu';
$password	= 'pamelica';
$database	= 'site';
$db=mysqli_connect($server, $username, $password);
if(!$db)
{
 	exit('Error: could not establish database connection');
}
if(!mysqli_select_db($db,$database))
{
 	exit('Error: could not select the database');
}
?>