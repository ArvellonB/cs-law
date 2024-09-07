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
$date = $_POST['date'];
$_SESSION['date1'] = $date;
$time = $_POST['time'];
$_SESSION['time1'] = $time;
$persontype = $_POST['persontype'];
$_SESSION['persontype1'] = $persontype;
$typecall = $_POST['typecall'];
$_SESSION['typecall1'] = $typecall;
$interstedperson = $_POST['interstedperson'];
$_SESSION['interstedperson1'] = $interstedperson;
$phone = $_POST['phone'];
$_SESSION['phone1'] = $phone;
$typeofperson = $_POST['typeofperson'];
$_SESSION['typeofperson1'] = $typeofperson;
$othertypeofperson = $_POST['othertypeofperson'];
$_SESSION['othertypeofperson1'] = $othertypeofperson;
$discloseclientinfo = $_POST['discloseclientinfo'];
$_SESSION['discloseclientinfo1'] = $discloseclientinfo;
$referredby = $_POST['referredby'];
$_SESSION['referredby1'] = $referredby;
$docoutgoingcorr = $_POST['docoutgoingcorr'];
$_SESSION['docoutgoingcorr1'] = $docoutgoingcorr;
$interstedemail = $_POST['interstedemail'];
$_SESSION['interstedemail1'] = $interstedemail;
$whichclient = $_POST['whichclient'];
$_SESSION['whichclient1'] = $whichclient;
$clientmatterinterest = $_POST['clientmatterinterest'];
$_SESSION['clientmatterinterest1'] = $clientmatterinterest;
$notes = $_POST['notes'];
$_SESSION['notes1'] = $notes;
$docincomingcorr = $_POST['docincomingcorr'];
$_SESSION['docincomingcorr1'] = $docincomingcorr;
$statusupdate = $_POST['statusupdate'];
$_SESSION['statusupdate1'] = $statusupdate;
$requestforinfo = $_POST['requestforinfo'];
$_SESSION['requestforinfo1'] = $requestforinfo;
$generictemp = $_POST['generictemp'];
$_SESSION['generictemp1'] = $generictemp;
$yearreview = $_POST['yearreview'];
$_SESSION['yearreview1'] = $yearreview;

	$sql2 = "INSERT INTO interestedacct (interstedperson, phone, interstedemail, persontype) VALUES ('$interstedperson', '$phone', '$interstedemail', '$persontype')";
	if ($conn->query($sql2) === TRUE)
		{
			$sql3 = "SELECT * FROM interestedacct WHERE interstedperson = '".$interstedperson."' AND phone = '".$phone."' AND interstedemail = '".$interstedemail."'";
			$result = $conn->query($sql3);
			if($result->num_rows > 0)
			{
				while($row = mysqli_fetch_array($result))
  				{
					$_SESSION['id1'] = $row['id'];
				}
				$id = $_SESSION['id1'];
			}
			$sql1= "INSERT INTO interested (date, time, persontype, typecall, interstedperson, phone, typeofperson, othertypeofperson, discloseclientinfo, referredby, docoutgoingcorr, interstedemail, whichclient, clientmatterinterest, notes, docincomingcorr, statusupdate, requestforinfo, generictemp, yearreview, employee, id) VALUES ('$date', '$time', '$persontype', '$typecall', '$interstedperson', '$phone', '$typeofperson', '$othertypeofperson', '$discloseclientinfo', '$referredby', '$docoutgoingcorr', '$interstedemail', '$whichclient', '$clientmatterinterest', '$notes', '$docincomingcorr', '$statusupdate', '$requestforinfo', '$generictemp', '$yearreview', '$employee', '$id')";
			if ($conn->query($sql1) == TRUE)
			{
				header("location:home.html");
			}
			else
			{
				echo "Error: " . $sql1 . "<br>" . $conn->error;
			}
		}
	else
		{
			echo "Error: " . $sql2 . "<br>" . $conn->error;
		}

$conn->close();

?>