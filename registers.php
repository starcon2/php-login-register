<?php


include("config.php");
if ($loggedin == 0) {

$uusername = $_POST["name"];
$upassword = $_POST["password"];
$fusername = preg_replace("/[^a-zA-Z]+/", "", $uusername);
$fusername = $conn->real_escape_string($fusername);

$phash = password_hash($upassword, PASSWORD_DEFAULT);

htmlEncode($fusername);

if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}
if ($fusername == "") {
    die("You can not have a empty username.");
}

if ( strlen($fusername) > 12)
{
	die("Username is to long.");
}

if ( strlen($fusername) == 1)
{
	die("Username is to short, please make it more than 1 character");
}

$sql = "SELECT * FROM users WHERE username='$fusername'";
$results = mysqli_query($conn, $sql);

if (mysqli_num_rows($results) > 0) {
	die("That username is taken.");
	}
	



$stmt = $conn->prepare("INSERT INTO users (username, password)  VALUES (?, ?)");
$stmt->bind_param("ss", $fusername, $phash);
$stmt->execute();
echo "Sucessfully Registered, you will be redirected to the login page.";
sleep(8);
header("Location: /login.php");
die();

$stmt->close();
$conn->close();
 } else { echo "You are already registered/logged in."; }


?>