<?php 
include "config.php";
include "navbar.php";
if  ( $loggedin == 0 )
{
	echo "Sign up/register today!";
 
 } else { 

 	echo "
 	<div class='container'>
 	<div class='jumbotron'>
<h3>Welcome back, $username!</h3>
				<br />
							<div class='container'>
							<h2>News</h2>
							<h3>Site updated</h3>
                             						</div>
                             						</div>";
 }

















 ?>