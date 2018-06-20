<?php
require "config.php";
include "navbar.php";

if ($loggedin == 1) {
    echo "You are already logged in.";
} else {
    echo '<html>
<body>
<div class="container">
<h1>Login</h1>
<form action="logins.php" method="post">
<input type="text" class="form-control" size="15" name="name" />
<input type="text" class="form-control" size="15" name="password" />
<input type="submit" class="btn btn-success" value="submit" />
</form>
</div>
</body>
</html>
';
}




?>

