<?php
$UN = $_POST['un'];
$PASS = $_POST['pass'];
session_start();
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "apex";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname)
    or
  die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());



  if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($conn,$_POST['un']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['pass']);

      $sql = "SELECT id FROM users WHERE un = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {

         $_SESSION['login_user'] = $myusername;
         header("location: book.html");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo '<script type="text/javascript"> alert("Your Login UserName or Password is invalid")
         window.open("login.html", "_top");
        </script>';
      }
   }


?>
