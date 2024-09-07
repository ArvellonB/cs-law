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
$clientname = $_POST['clientname'];
$_SESSION['clientname1'] = $clientname;
$phone = $_POST['phone'];
$_SESSION['phone1'] = $phone;
$countype = $_POST['countype'];
$_SESSION['countype1'] = $countype;
$otherinfo = $_POST['otherinfo'];
$_SESSION['otherinfo1'] = $otherinfo;
$apptquestion = $_POST['apptquestion'];
$_SESSION['apptquestion1'] = $apptquestion;
$appointdate = $_POST['appointdate'];
$_SESSION['appointdate1'] = $appointdate;
$appointime = $_POST['appointime'];
$_SESSION['appointime1'] = $appointime;
$consloc = $_POST['consloc'];
$_SESSION['consloc1'] = $consloc;
$levelofdif = $_POST['levelofdif'];
$_SESSION['levelofdif1'] = $levelofdif;
$genwellet = $_POST['genwellet'];
$_SESSION['genwellet1'] = $genwellet;
$genwelemail = $_POST['genwelemail'];
$_SESSION['genwelemail1'] = $genwelemail;
$apptreason = $_POST['apptreason'];
$_SESSION['apptreason1'] = $apptreason;
$gender1 = $_POST['gender1'];
$_SESSION['gender1one'] = $gender1;
$client1email = $_POST['client1email'];
$_SESSION['client1email1'] = $client1email;
$clientaddress = $_POST['clientaddress'];
$_SESSION['clientaddress1'] = $clientaddress;
$areyoumarried = $_POST['areyoumarried'];
$_SESSION['areyoumarried1'] = $areyoumarried;
$spousename = $_POST['spousename'];
$_SESSION['spousename1'] = $spousename;
$gender2 = $_POST['gender2'];
$_SESSION['gender2one'] = $gender2;
$phonespouse = $_POST['phonespouse'];
$_SESSION['phonespouse1'] = $phonespouse;
$spouseemail = $_POST['spouseemail'];
$_SESSION['spouseemail1'] = $spouseemail;
$tone1 = $_POST['tone1'];
$_SESSION['tone1one'] = $tone1;
$tone2 = $_POST['tone2'];
$_SESSION['tone2one'] = $tone2;
$tone3 = $_POST['tone3'];
$_SESSION['tone3one'] = $tone3;
$legalmatternotes = $_POST['legalmatternotes'];
$_SESSION['legalmatternotes1'] = $legalmatternotes;
$personaltouch = $_POST['personaltouch'];
$_SESSION['personaltouch1'] = $personaltouch;
$lengthphonecall = $_POST['lengthphonecall'];
$_SESSION['lengthphonecall1'] = $lengthphonecall;
$employee = $_POST['employee'];
$_SESSION['employee1'] = $employee;
$sys = "The account was created";
$_SESSION['sys1'] = $sys;

	$sql2 = "INSERT INTO clientacct (clientname, phone, clientaddress, client1email, spousename, gender2, gender1, phonespouse, spouseemail, persontype, sys) VALUES ('$clientname', '$phone', '$clientaddress', '$client1email', '$spousename', '$gender2', '$gender1', '$phonespouse', '$spouseemail', '$persontype', '$sys')";
	if ($conn->query($sql2) === TRUE)
		{
			$sql3 = "SELECT * FROM clientacct WHERE clientname = '".$clientname."' AND phone = '".$phone."' AND clientaddress = '".$clientaddress."' AND client1email = '".$client1email."'";
			$result = $conn->query($sql3);
			if($result->num_rows > 0)
			{
				while($row = mysqli_fetch_array($result))
  				{
					$_SESSION['id1'] = $row['id'];
				}
				$id = $_SESSION['id1'];
			}
			$sql1= "INSERT INTO clients (date, time, persontype, clientname, phone, typecall, countype, otherinfo, apptquestion, appointdate, appointime, consloc, levelofdif, genwellet, genwelemail, apptreason, gender1, client1email, clientaddress, areyoumarried, spousename, gender2, phonespouse, spouseemail, tone1, tone2, tone3, legalmatternotes, personaltouch, lengthphonecall, employee, id) VALUES ('$date', '$time', '$persontype', '$clientname', '$phone', '$typecall', '$countype', '$otherinfo', '$apptquestion', '$appointdate', '$appointime', '$consloc', '$levelofdif', '$genwellet', '$genwelemail', '$apptreason', '$gender1', '$client1email', '$clientaddress', '$areyoumarried', '$spousename', '$gender2', '$phonespouse', '$spouseemail', '$tone1', '$tone2', '$tone3', '$legalmatternotes', '$personaltouch', '$lengthphonecall', '$employee', '$id')";
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