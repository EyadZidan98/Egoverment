<?php 
require 'config-db.php';
session_start();

extract($_POST);


$sql="SELECT * FROM admin WHERE username='".$username."' and password='".$pass."'";
$qpass="SELECT * FROM sign_up WHERE username='".$username."' and password<>'".$pass."'";


if ($result=mysqli_query($db,$sql))
  {
  $rowcount=mysqli_num_rows($result);
  if ($rowcount==1)
   {
      while ($row = $result->fetch_assoc()) {
      $_SESSION['user_name']= $row["name"];
      
   }
    header("Location: admin-control.php");
    exit;
     mysqli_free_result($result);
  }
  elseif($result2=mysqli_query($db,$qpass))
  {
   $rowcount2=mysqli_num_rows($result2);
   if ($rowcount2==1)
    {
      header("adminlogin.php");
      echo "<script>alert('wrong username or password')</script>";
      mysqli_free_result($result2);
   }  
   elseif($result3=mysqli_query($db,$qemail))
  {
   $rowcount3=mysqli_num_rows($result3);
   if ($rowcount3>=1)
    {
      header("adminlogin.php");
      echo "<script>alert('This user doesn't exist)</script>";
      mysqli_free_result($result3);
   
 }
  
}
}
}

?>