<!DOCTYPE html>
<html>
<h1>Login Page</h1>

<link rel="stylesheet" type="text/css" href="CSS.css">
<body>
     
 <form action="#" method="POST">
 	  
    <fieldset>
        <legend> Are you Admin or Student? </legend>
      
      <input type="radio" id="member" name="member" value="student">
      <label for="member"> Student     </label>


      <input type="radio" id="member" name="member" value="admin">
      <label for="member"> Admin</label>

    </fieldset>

 	<br>Username   <input type="text" name="username" placeholder="Enter your username" class="inp" /><br><br>
      Password   <input type="text" name="password" placeholder="Enter your password" class="inp" /><br><br>
                 <input type="submit" value="SUBMIT" class="submit white" /><br><br>

</form>

</body>
</html>

<?php

$connect=mysqli_connect("localhost","root","","demo");

 $member=$_POST['member']??"";
 $uname=$_POST['username']??"";
 $pass=$_POST['password']??"";

  
 if($member=='student')
 {    session_start();
      $_SESSION['var']=$uname;

    $sql="SELECT * FROM records WHERE Rollno='$uname' && Dateofbirth='$pass'";
    $result=mysqli_query($connect,$sql);

    if(mysqli_num_rows($result))
    {
    	header("refresh:0; url=student.php");
    }

    else
    {
    	echo "Incorrect credentials. Try again";
    	header("refresh:3; url=login.php");
    }
 }

 elseif ($member=='admin') 
  {   
    $sql="SELECT * FROM admin WHERE username='$uname' && password='$pass'";
    $result=mysqli_query($connect,$sql);

    if(mysqli_num_rows($result))
    {
    	header("refresh:0; url=admin.php");
    }

    else
    {
    	echo "Incorrect credentials. Try again";
    	header("refresh:3; url=login.php");
    }	
  }
?>
