<?php

$con = mysqli_connect("localhost","root","","demo");
$roll = $_POST['roll']??"";
$dob = $_POST['dob']??"";
$sql = "DELETE FROM records WHERE RollNo='$roll' && Dateofbirth='$dob' ";

$result = mysqli_query($con,$sql);

if ($result) 
{  
  session_start();
  $_SESSION['dummy']=$roll;
  header("refresh:0 ; url=Create.php");
}

else
{
   echo "Incorrect credentials. Try again.";
   header("refresh:2 ; url=Update.php");
} 

?>