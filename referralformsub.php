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
$companyname = $_POST['companyname'];
$_SESSION['companyname1'] = $companyname;
$workphone = $_POST['workphone'];
$_SESSION['workphone1'] = $workphone;
$faxphone = $_POST['faxphone'];
$_SESSION['faxphone1'] = $faxphone;
$businesstype = $_POST['businesstype'];
$_SESSION['businesstype1'] = $businesstype;
$otherbusinesstype = $_POST['otherbusinesstype'];
$_SESSION['otherbusinesstype1'] = $otherbusinesstype;
$referredby = $_POST['referredby'];
$_SESSION['referredby1'] = $referredby;
$docincomingcorr = $_POST['docincomingcorr'];
$_SESSION['docincomingcorr1'] = $docincomingcorr;
$docoutgoingcorr = $_POST['docoutgoingcorr'];
$_SESSION['docoutgoingcorr1'] = $docoutgoingcorr;
$referralemail = $_POST['referralemail'];
$_SESSION['referralemail1'] = $referralemail;
$cellphone = $_POST['cellphone'];
$_SESSION['cellphone1'] = $cellphone;
$mailaddress = $_POST['mailaddress'];
$_SESSION['mailaddress1'] = $mailaddress;
$discloseclientinfo = $_POST['discloseclientinfo'];
$_SESSION['discloseclientinfo1'] = $discloseclientinfo;
$whichclient = $_POST['whichclient'];
$_SESSION['whichclient1'] = $whichclient;
$notes = $_POST['notes'];
$_SESSION['notes1'] = $notes;
$statusupdate = $_POST['statusupdate'];
$_SESSION['statusupdate1'] = $statusupdate;
$requestforinfo = $_POST['requestforinfo'];
$_SESSION['requestforinfo1'] = $requestforinfo;
$generictemp = $_POST['generictemp'];
$_SESSION['generictemp1'] = $generictemp;
$yearreview = $_POST['yearreview'];
$_SESSION['yearreview1'] = $yearreview;

	$sql2 = "INSERT INTO referralacct (companyname, workphone, cellphone, referralemail, persontype) VALUES ('$companyname', '$workphone', '$cellphone', '$referralemail', '$persontype')";
	if ($conn->query($sql2) === TRUE)
		{
			$sql3 = "SELECT * FROM referralacct WHERE companyname = '".$companyname."' AND workphone = '".$workphone."' AND referralemail = '".$referralemail."'";
			$result = $conn->query($sql3);
			if($result->num_rows > 0)
			{
				while($row = mysqli_fetch_array($result))
  				{
					$_SESSION['id1'] = $row['id'];
				}
				$id = $_SESSION['id1'];
			}
			$sql1= "INSERT INTO referral (date, time, persontype, typecall, companyname, workphone, faxphone, businesstype, otherbusinesstype, referredby, docincomingcorr, docoutgoingcorr, referralemail, cellphone, mailaddress, discloseclientinfo, whichclient, notes, statusupdate, requestforinfo, generictemp, yearreview, employee, id) VALUES ('$date', '$time', '$persontype', '$typecall', '$companyname', '$workphone', '$faxphone', '$businesstype', '$otherbusinesstype', '$referredby', '$docincomingcorr', '$docoutgoingcorr', '$referralemail', '$cellphone', '$mailaddress', '$discloseclientinfo', '$whichclient', '$notes', '$statusupdate', '$requestforinfo', '$generictemp', '$yearreview', '$employee', '$id')";
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