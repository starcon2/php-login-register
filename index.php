<?php 
include "config.php";
include "navbar.php";
if  ( $loggedin == 0 )
{
	echo "Sign up/register today!";
 
 } else { 

 	echo "Hello, $username";
 }
 ?>