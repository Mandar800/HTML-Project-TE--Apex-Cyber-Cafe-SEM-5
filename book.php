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
$dbUsername = "id11279305_admin";
$dbPassword = "admin";
$dbname = "id11279305_apexcyber";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname)
    or
  die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());


  if ($SPEC =='pc') {
    $duplicate=mysqli_query($conn,"select * from spec where title='$pc_array[0]' AND datee='$DATE' AND fro='$TIME'");
    $TITLE=$pc_array[0];
    if (mysqli_num_rows($duplicate)>0){
    	 $duplicate=mysqli_query($conn,"select * from spec where title='$pc_array[1]' datee='$DATE' AND fro='$TIME'");
       $TITLE=$pc_array[1];
       if (mysqli_num_rows($duplicate)>0){
         $duplicate=mysqli_query($conn,"select * from spec where title='$pc_array[2]' datee='$DATE' AND fro='$TIME'");
         $TITLE=$pc_array[2];
      if (mysqli_num_rows($duplicate)>0){
          echo ' <script type="text/javascript"> alert("Time Slot Already Taken! PLease Select Another Time Slot!")
        			window.open("book.html", "_top");
        		</script>';
          }else {
            // insert2
            $TITLE=$pc_array[2];
           $INSERT = "INSERT Into spec(title,un,datee,fro,till)values('".$TITLE."','".$NAME."','".$DATE."' ,'".$TIME."','".$DUR."');";
             if(mysqli_query($conn,$INSERT))
             {
               echo ' <script type="text/javascript"> alert("Booked !")
                window.open("index.html", "_top");
               </script>';

             }
             else{
               echo 'failed to insert';
               echo mysqli_error($conn);
                 }
          }
       }else {
         // insert1
         $TITLE=$pc_array[1];
        $INSERT = "INSERT Into spec(title,un,datee,fro,till)values('".$TITLE."','".$NAME."','".$DATE."' ,'".$TIME."','".$DUR."');";
          if(mysqli_query($conn,$INSERT))
          {
            echo ' <script type="text/javascript"> alert("Booked !")
             window.open("index.html", "_top");
            </script>';

          }
          else{
            echo 'failed to insert';
            echo mysqli_error($conn);
              }
       }
     }else {
       //insert0

       $TITLE=$pc_array[0];
      $INSERT = "INSERT Into spec(title,un,datee,fro,till)values('".$TITLE."','".$NAME."','".$DATE."' ,'".$TIME."','".$DUR."');";
        if(mysqli_query($conn,$INSERT))
        {
          echo ' <script type="text/javascript"> alert("Booked !")
           window.open("index.html", "_top");
          </script>';

        }
        else{
          echo 'failed to insert';
          echo mysqli_error($conn);
            }
     }
}
elseif ($SPEC =='gpc') {



  $duplicate=mysqli_query($conn,"select * from spec where title='$Gpc_array[0]' AND datee='$DATE' AND fro='$TIME'");
  $TITLE=$Gpc_array[0];
  if (mysqli_num_rows($duplicate)>0){
     $duplicate=mysqli_query($conn,"select * from spec where title='$Gpc_array[1]' datee='$DATE' AND fro='$TIME'");
     $TITLE=$Gpc_array[1];
     if (mysqli_num_rows($duplicate)>0){
       $duplicate=mysqli_query($conn,"select * from spec where title='$Gpc_array[2]' datee='$DATE' AND fro='$TIME'");
       $TITLE=$Gpc_array[2];
    if (mysqli_num_rows($duplicate)>0){
        echo ' <script type="text/javascript"> alert("Time Slot Already Taken! PLease Select Another Time Slot!")
            window.open("book.html", "_top");
          </script>';
        }else {
          // insert2
          $TITLE=$Gpc_array[2];
         $INSERT = "INSERT Into spec(title,un,datee,fro,till)values('".$TITLE."','".$NAME."','".$DATE."' ,'".$TIME."','".$DUR."');";
           if(mysqli_query($conn,$INSERT))
           {
             echo ' <script type="text/javascript"> alert("Booked !")
              window.open("index.html", "_top");
             </script>';

           }
           else{
             echo 'failed to insert';
             echo mysqli_error($conn);
               }
        }
     }else {
       // insert1
       $TITLE=$Gpc_array[1];
      $INSERT = "INSERT Into spec(title,un,datee,fro,till)values('".$TITLE."','".$NAME."','".$DATE."' ,'".$TIME."','".$DUR."');";
        if(mysqli_query($conn,$INSERT))
        {
          echo ' <script type="text/javascript"> alert("Booked !")
           window.open("index.html", "_top");
          </script>';

        }
        else{
          echo 'failed to insert';
          echo mysqli_error($conn);
            }
     }
   }else {
     //insert0

     $TITLE=$Gpc_array[0];
    $INSERT = "INSERT Into spec(title,un,datee,fro,till)values('".$TITLE."','".$NAME."','".$DATE."' ,'".$TIME."','".$DUR."');";
      if(mysqli_query($conn,$INSERT))
      {
        echo ' <script type="text/javascript"> alert("Booked !")
         window.open("index.html", "_top");
        </script>';

      }
      else{
        echo 'failed to insert';
        echo mysqli_error($conn);
          }
   }



  }elseif ($SPEC == 'vr') {


    $duplicate=mysqli_query($conn,"select * from spec where title='$vrpc_array[0]' AND datee='$DATE' AND fro='$TIME'");
    $TITLE=$vrpc_array[0];
    if (mysqli_num_rows($duplicate)>0){
       $duplicate=mysqli_query($conn,"select * from spec where title='$vrpc_array[1]' datee='$DATE' AND fro='$TIME'");
       $TITLE=$vrpc_array[1];
       if (mysqli_num_rows($duplicate)>0){
         $duplicate=mysqli_query($conn,"select * from spec where title='$vrpc_array[2]' datee='$DATE' AND fro='$TIME'");
         $TITLE=$vrpc_array[2];
      if (mysqli_num_rows($duplicate)>0){
          echo ' <script type="text/javascript"> alert("Time Slot Already Taken! PLease Select Another Time Slot!")
              window.open("book.html", "_top");
            </script>';
          }else {
            // insert2
            $TITLE=$vrpc_array[2];
           $INSERT = "INSERT Into spec(title,un,datee,fro,till)values('".$TITLE."','".$NAME."','".$DATE."' ,'".$TIME."','".$DUR."');";
             if(mysqli_query($conn,$INSERT))
             {
               echo ' <script type="text/javascript"> alert("Booked !")
                window.open("index.html", "_top");
               </script>';

             }
             else{
               echo 'failed to insert';
               echo mysqli_error($conn);
                 }
          }
       }else {
         // insert1
         $TITLE=$vrpc_array[1];
        $INSERT = "INSERT Into spec(title,un,datee,fro,till)values('".$TITLE."','".$NAME."','".$DATE."' ,'".$TIME."','".$DUR."');";
          if(mysqli_query($conn,$INSERT))
          {
            echo ' <script type="text/javascript"> alert("Booked !")
             window.open("index.html", "_top");
            </script>';

          }
          else{
            echo 'failed to insert';
            echo mysqli_error($conn);
              }
       }
     }else {
       //insert0

       $TITLE=$vrpc_array[0];
      $INSERT = "INSERT Into spec(title,un,datee,fro,till)values('".$TITLE."','".$NAME."','".$DATE."' ,'".$TIME."','".$DUR."');";
        if(mysqli_query($conn,$INSERT))
        {
          echo ' <script type="text/javascript"> alert("Booked !")
           window.open("index.html", "_top");
          </script>';

        }
        else{
          echo 'failed to insert';
          echo mysqli_error($conn);
            }
     }



  }elseif ($SPEC == 'xbox') {


    $duplicate=mysqli_query($conn,"select * from spec where title='$xbox_array[0]' AND datee='$DATE' AND fro='$TIME'");
    $TITLE=$xbox_array[0];
    if (mysqli_num_rows($duplicate)>0){
       $duplicate=mysqli_query($conn,"select * from spec where title='$xbox_array[1]' datee='$DATE' AND fro='$TIME'");
       $TITLE=$xbox_array[1];
       if (mysqli_num_rows($duplicate)>0){
         $duplicate=mysqli_query($conn,"select * from spec where title='$xbox_array[2]' datee='$DATE' AND fro='$TIME'");
         $TITLE=$xbox_array[2];
      if (mysqli_num_rows($duplicate)>0){
          echo ' <script type="text/javascript"> alert("Time Slot Already Taken! PLease Select Another Time Slot!")
              window.open("book.html", "_top");
            </script>';
          }else {
            // insert2
            $TITLE=$xbox_array[2];
           $INSERT = "INSERT Into spec(title,un,datee,fro,till)values('".$TITLE."','".$NAME."','".$DATE."' ,'".$TIME."','".$DUR."');";
             if(mysqli_query($conn,$INSERT))
             {
               echo ' <script type="text/javascript"> alert("Booked !")
                window.open("index.html", "_top");
               </script>';

             }
             else{
               echo 'failed to insert';
               echo mysqli_error($conn);
                 }
          }
       }else {
         // insert1
         $TITLE=$xbox_array[1];
        $INSERT = "INSERT Into spec(title,un,datee,fro,till)values('".$TITLE."','".$NAME."','".$DATE."' ,'".$TIME."','".$DUR."');";
          if(mysqli_query($conn,$INSERT))
          {
            echo ' <script type="text/javascript"> alert("Booked !")
             window.open("index.html", "_top");
            </script>';

          }
          else{
            echo 'failed to insert';
            echo mysqli_error($conn);
              }
       }
     }else {
       //insert0

       $TITLE=$xbox_array[0];
      $INSERT = "INSERT Into spec(title,un,datee,fro,till)values('".$TITLE."','".$NAME."','".$DATE."' ,'".$TIME."','".$DUR."');";
        if(mysqli_query($conn,$INSERT))
        {
          echo ' <script type="text/javascript"> alert("Booked !")
           window.open("index.html", "_top");
          </script>';

        }
        else{
          echo 'failed to insert';
          echo mysqli_error($conn);
            }
     }



  }elseif ($SPEC == 'ps') {



    $duplicate=mysqli_query($conn,"select * from spec where title='$ps_array[0]' AND datee='$DATE' AND fro='$TIME'");
    $TITLE=$ps_array[0];
    if (mysqli_num_rows($duplicate)>0){
       $duplicate=mysqli_query($conn,"select * from spec where title='$ps_array[1]' datee='$DATE' AND fro='$TIME'");
       $TITLE=$ps_array[1];
       if (mysqli_num_rows($duplicate)>0){
         $duplicate=mysqli_query($conn,"select * from spec where title='$ps_array[2]' datee='$DATE' AND fro='$TIME'");
         $TITLE=$ps_array[2];
      if (mysqli_num_rows($duplicate)>0){
          echo ' <script type="text/javascript"> alert("Time Slot Already Taken! PLease Select Another Time Slot!")
              window.open("book.html", "_top");
            </script>';
          }else {
            // insert2
            $TITLE=$ps_array[2];
           $INSERT = "INSERT Into spec(title,un,datee,fro,till)values('".$TITLE."','".$NAME."','".$DATE."' ,'".$TIME."','".$DUR."');";
             if(mysqli_query($conn,$INSERT))
             {
               echo ' <script type="text/javascript"> alert("Booked !")
                window.open("index.html", "_top");
               </script>';

             }
             else{
               echo 'failed to insert';
               echo mysqli_error($conn);
                 }
          }
       }else {
         // insert1
         $TITLE=$ps_array[1];
        $INSERT = "INSERT Into spec(title,un,datee,fro,till)values('".$TITLE."','".$NAME."','".$DATE."' ,'".$TIME."','".$DUR."');";
          if(mysqli_query($conn,$INSERT))
          {
            echo ' <script type="text/javascript"> alert("Booked !")
             window.open("index.html", "_top");
            </script>';

          }
          else{
            echo 'failed to insert';
            echo mysqli_error($conn);
              }
       }
     }else {
       //insert0

       $TITLE=$ps_array[0];
      $INSERT = "INSERT Into spec(title,un,datee,fro,till)values('".$TITLE."','".$NAME."','".$DATE."' ,'".$TIME."','".$DUR."');";
        if(mysqli_query($conn,$INSERT))
        {
          echo ' <script type="text/javascript"> alert("Booked !")
           window.open("index.html", "_top");
          </script>';

        }
        else{
          echo 'failed to insert';
          echo mysqli_error($conn);
            }
     }



  }
  $conn->close();


?>
