<?php

// Inialize session
session_start();

// Include database connection settings
include('config.inc');

// Retrieve username and password from database according to user's input
$login = mysql_query("SELECT * FROM admin WHERE (user = '" . mysql_real_escape_string($_POST['myusername']) . "') and (password = '" . mysql_real_escape_string($_POST['mypassword']) . "')");

// Check username and password match
if (mysql_num_rows($login) == 1) {
// Set username session variable
$_SESSION['username'] = $_POST['myusername'];
// Jump to secured page
header('Location: adminpage.php');
}
else {
// Jump to login page
header('Location: error.php');
}

?>
