<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Set session variables
$_SESSION["username"] = "emi johnson";
$_SESSION["email"] = "emichungath@gmail.com";
echo "Session variables are set.";
?>
</body>
</html>
