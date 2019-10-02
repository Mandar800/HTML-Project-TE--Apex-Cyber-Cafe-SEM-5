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



	$duplicate=mysqli_query($conn,"select * from users where un='$NAME' or email='$EMAIL'");
	if (mysqli_num_rows($duplicate)>0)
	{
		echo ' <script type="text/javascript"> alert("Username or Email Already Taken !")
			window.open("signup.html", "_top");
		</script>';
	}
	else{
		$INSERT = "INSERT Into users(un,email,tel,pass)values('".$NAME."','".$EMAIL."','".$TEL."' ,'".$PASS."')";
 if(mysqli_query($conn,$INSERT))
 {
	 echo ' <script type="text/javascript"> alert("Account Created Please Login Now!")
		window.open("login.html", "_top");
	 </script>';

 }
 else{
	 echo 'failed to insert';
	 echo mysqli_error($conn);
 }
	}

$conn->close();

}
?>
