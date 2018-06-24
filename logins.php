<?php


session_start();
require_once 'config.php';

if ($loggedin == 0) {
	
	$username = strip_tags($_POST['name']);
	$password = strip_tags($_POST['password']);

	$username = $conn->real_escape_string($username);

	$password = $conn->real_escape_string($password);
	
	$query = $conn->query("SELECT id, username, password FROM users WHERE username='$username'");


	$row=$query->fetch_array();
	
	$count = $query->num_rows; // if email/password are correct returns must be 1 row
	
	if (password_verify($password, $row['password']) && $count==1) {
		$_SESSION['userSession'] = $row['id'];
		$_SESSION['userSession'] = $row['username'];
		 $_SESSION['loggedin'] = true;
          echo "worked";
          header("Location: /index.php");
          die();

	} else {
		echo "Incorrect username or password.";
	}
	$conn->close();

} else {
	echo "You are already logged in.";
}

?>

	</center>
</body>
</html>
