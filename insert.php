<?php
$NAME = $_POST['un'];
$EMAIL = $_POST['email'];
$TEL = $_POST['tel'];
$PASS = $_POST['pass'];

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
   

     $INSERT = "INSERT Into users(un,email,tel,pass)values('".$NAME."','".$EMAIL."','".$TEL."' ,'".$PASS."')";
	if(mysqli_query($conn,$INSERT))
	{
		echo ' <script type="text/javascript"> alert("DATA SAVED")
		 window.open("book.html", "_top");
		</script>';
		
	}
	else{
		echo 'failed to insert';
		echo mysqli_error($conn);
	}
	 
     $conn->close();
    
} 
?>
