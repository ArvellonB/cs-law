<?php
$username = $_POST['User'];
$password = $_POST['Password'];
	session_start();
	include ("sql.php");
	$username = $_POST['User'];
    $password = $_POST['Password'];
	$_SESSION['username1'] = $username;
	$_SESSION['password1'] = $password;
	$sql = "SELECT * FROM users WHERE user = '".$_SESSION['username1']."' AND pass = '".$_SESSION['password1']."'";
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         if( $_SESSION['username1'] == $row["user"] && $_SESSION['password1'] == $row["pass"])
		 {
			 $_SESSION['admin1'] = $row['admin'];
			 $_SESSION['firstname1'] = $row['firstname'];
			 $_SESSION['lastname1'] = $row['lastname'];
			$_SESSION['login_status']=true;
			header("location:../home.html");
		 }
     }
} else {
      echo ("<script language='javascript'>
	window.alert('Invalid Credentials')
	window.location.href='../index.html'
	</script>");
}
	?>