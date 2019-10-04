<?php
$NAME = $_POST['un'];
$EMAIL = $_POST['email'];
$TEL = $_POST['tel'];
$MSG = $_POST['msg'];

if (!empty($NAME) || !empty($EMAIL) || !empty($TEL) || !empty($PASS))
	{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "apex";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname)
				or
			die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());





	$INSERT = "INSERT Into contact(un,email,tel,msg)values('".$NAME."','".$EMAIL."','".$TEL."' ,'".$MSG."')";
 if(mysqli_query($conn,$INSERT))
 {
	 echo ' <script type="text/javascript"> alert("Data Captured")
		window.open("login.html", "_top");
	 </script>';

 }
 else{
	 echo 'failed to insert';
	 echo mysqli_error($conn);
 }
	}

$conn->close();


?>
