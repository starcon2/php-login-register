<?php
require "config.php";
include "navbar.php";
if ($loggedin == 0 ) {
echo '
<html><head></head>
<body>
<div class="container">
<h1>Register</h1>
<form action="registers.php" method="post">
<input type="text" class="form-control" size="15" name="name" />
<input type="text" class="form-control" size="15" name="password" />
<p> </p>
<input type="submit" class="btn btn-success" value="submit" />
</form>
</div>
</body>

</html>
';
} else {
echo "You are already registered/logged in.";
}
?>

