<?php
$servername = "localhost";
$susername = "root";
$spassword = "";
$dbname = "h2";

$conn = new mysqli($servername, $susername, $spassword, $dbname);
$conn->set_charset("utf8");

function htmlEncode($s) {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

if (session_status() == PHP_SESSION_NONE) {
    // There is no session, start a new one.
    session_start();
}


	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = 1;

} else {
	$loggedin = 0;
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
$username = $_SESSION["userSession"];
}



?>