<?php
//Initalize a session to access this page
session_start();
//Change login status session value to false to protect the system from unauthorized access
$_SESSION['login_status'] = false;
//Wipe out session information for security purposes
session_destroy();
//Redirect the user back to home page
header("location:/cslaw/index.php");
?>