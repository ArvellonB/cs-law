<?php
$servername="localhost";
$username="root";
$password="Jr91766jr";
$dbname="lawmanagement";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}
session_start();
$comments = $_POST['comments'];
$_SESSION['comments1'] = $comments;

$sql1 = "UPDATE clientacct SET comments = '$comments' WHERE clientname ='".$_SESSION['clientname1']."'";
if ($conn->query($sql1) == TRUE)
{
				header("location:profile.php");
}
else
{
	echo "Error: " . $sql1 . "<br>" . $conn->error;
}
		
$conn->close();

?>