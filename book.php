<?php
session_start();
$SPEC = $_POST['Specs'];
$DATE = $_POST['date'];
$TIME = $_POST['time'];
$T=$_POST['dur'];
$DUR = $TIME + $T;
$NAME = $_SESSION['login_user'];
$pc_array = array("pc1", "pc2","pc3");
$Gpc_array = array("Gpc1", "Gpc2","Gpc3");
$vrpc_array = array("vrpc1", "vrpc2");
$xbox_array = array("xbox1", "xbox2","xbox3");
$ps_array = array("ps1", "ps2","ps3");

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "apex";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname)
    or
  die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());


  if ($SPEC =='pc') {
    $duplicate=mysqli_query($conn,"select * from spec where title='$pc_array[0]' date='$DATE' AND from='$TIME'");
    $TITLE=$pc_array[0];
    if (mysqli_num_rows($duplicate)>0){
    	 $duplicate=mysqli_query($conn,"select * from spec where title='$pc_array[1]' date='$DATE' AND from='$TIME'");
       $TITLE=$pc_array[1];
       if (mysqli_num_rows($duplicate)>0){
         $duplicate=mysqli_query($conn,"select * from spec where title='$pc_array[2]' date='$DATE' AND from='$TIME'");
         $TITLE=$pc_array[2];
          if (mysqli_num_rows($duplicate)>0){
            echo ' <script type="text/javascript"> alert("Time Slot Already Taken! PLease Select Another Time Slot!")
        			window.open("book.html", "_top");
        		</script>';
          }
       }
     }else {
       $INSERT = "INSERT Into spec(title,un,datee,fro,till)values('".$TITLE."','".$NAME."','".$DATE."' ,'".$TIME."','".$DUR."');";
       if(mysqli_query($conn,$INSERT))
    {
   	 echo ' <script type="text/javascript"> alert("Booked!")
   		window.open("login.html", "_top");
   	 </script>';

    }
    else{
   	 echo 'failed to insert';
   	 echo mysqli_error($conn);
    }
     }

    $TITLE = array_rand($pc_array);



  }elseif ($SPEC =='gpc') {



    $TITLE = array_rand($Gpc_array);



  }elseif ($SPEC == 'vr') {



    $TITLE = array_rand($vrpc_array);



  }elseif ($SPEC == 'xbox') {


    $TITLE = array_rand($xbox_array);



  }elseif ($SPEC == 'ps') {



    $TITLE = array_rand($ps_array);



  }
  $conn->close();


?>
