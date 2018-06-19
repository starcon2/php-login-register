<?php
require "config.php";
include "navbar.php";

if ($loggedin == 1) {
    echo "You are already logged in.";
} else {
    echo '<html>
<body>
<form action="logins.php" method="post">
<input type="text" size="15" name="name" />
<input type="text" size="15" name="password" />
<input type="submit" value="submit" />
</form></body>
</html>
';
}




?>

