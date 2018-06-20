<?php 
include "config.php";
include "navbar.php";
if  ( $loggedin == 0 )
{
	echo "Sign up/register today!";
 
 } else { 

 	echo "<center><h1>Hello, $username</h1></center>";
 }
 ?>