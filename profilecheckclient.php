<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "Jr91766jr";
$dbname = "lawmanagement";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM clientacct WHERE clientname='Tonka Dog'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $_SESSION['clientname1'] = $row['clientname'];
		$_SESSION['phone1'] = $row['phone'];
		$_SESSION['client1email1'] = $row['client1email'];
		$_SESSION['clientaddress1'] = $row['clientaddress'];
		$_SESSION['spousename1'] = $row['spousename'];
		$_SESSION['phonespouse1'] = $row['phonespouse'];
		$_SESSION['spouseemail1'] = $row['spouseemail'];
		$_SESSION['actionstepstatus1'] = $row['actionstepstatus'];
		$_SESSION['sys1'] = $row['sys'];
		$_SESSION['comments1'] = $row['comments'];
    }
	$_SESSION['actionstepstatus1'] = "1st Follow Up Call";
}

$conn->close();
header("location:profile.php");
?>