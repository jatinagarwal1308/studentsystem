<?php  
      
    $connect=mysqli_connect("localhost","root","","demo");
     
    $name=$_POST['name']??"";
    $roll=$_POST['rollno']??"";
    $dob =$_POST['dob']??"";  
    $marks=$_POST['marks']??"";  

    $sql="INSERT INTO records (Fullname,RollNo,Dateofbirth,Marks) VALUES ('$name','$roll','$dob','$marks') ";
       
      if(mysqli_query($connect,$sql))
    {
      echo "Your record is saved.";
      header("refresh:2; url=admin.php");
    }

    else
    {
      echo "This Roll No. already exists. Try again.";
      header("refresh:2; url=admin.php");
    }
  
?> 