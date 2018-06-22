<?php
$servername = "localhost";
$susername = "root";
$spassword = "";
$dbname = "h2";

$conn = new mysqli($servername, $susername, $spassword, $dbname);
$conn->set_charset("utf8");

function htmlEncode($input) {
      $search = array(
    '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
    '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
    '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
    '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
  );

    $output = preg_replace($search, '', $input);
    return $output;
  }
?>
<?php
function sanitize($input) {
    if (is_array($input)) {
        foreach($input as $var=>$val) {
            $output[$var] = sanitize($val);
        }
    }
    else {
        if (get_magic_quotes_gpc()) {
            $input = stripslashes($input);
        }
        $input  = cleanInput($input);
        $output = mysql_real_escape_string($input);
    }
    return $output;
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