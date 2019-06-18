<!DOCTYPE html>
<html>
<h1>Student Page</h1>
<head>
	<title>Student Page</title>
  <link rel="stylesheet" type="text/css" href="CSS.css">

</head>
<body>
	
<button  onclick = "window.location.href = 'login.php'; " class="button logblue"> Logout </button>

</body>
</html>

<?php
 
 session_start();
 $roll=$_SESSION['var'];

 $con=mysqli_connect("localhost","root","","demo");
 $sql="SELECT * FROM records WHERE RollNo='$roll' ";
            $result=mysqli_query($con,$sql);

            if(mysqli_num_rows($result)==1)
            {
               $i=mysqli_fetch_assoc($result);
               
               	  echo "Name : ".$i['Fullname'].'<br>'."Roll No. : ".$i['RollNo'].'<br>'."DOB : ".$i['Dateofbirth'].'<br>'."Marks : ".$i['Marks'].'<br><br>';
            }    
 
?>