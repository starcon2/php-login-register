<?php
require "config.php";
include "navbar.php";
if ($loggedin == 0 ) {
echo '
<html><head></head>
<body>
<form action="registers.php" method="post">
<input type="text" size="15" name="name" />
<input type="text" size="15" name="password" />
<input type="submit" value="submit" />
</form></body>
</html>
';
} else {
echo "You are already registered/logged in.";
}
?>

