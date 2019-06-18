<!DOCTYPE html>
<html>
<h1>Account creation Page</h1>
<title>Account creation Page</title>

<link rel="stylesheet" type="text/css" href="CSS.css">
<body>

<button  onclick = "window.location.href = 'admin.php'; " class="log blue"> Go Back </button>

 <form action="create2.php" method="POST">
 	  Student's Name <input type="text"   name="name"    placeholder="Enter your Name" id="name" class="inp" />   <br><br>
 	  Roll Number    <input type="Number" name="rollno"  placeholder="Enter your Rollno" value="<?php  session_start(); echo $_SESSION['dummy']??"";  ?>" class="inp"/> <br><br>
 	  Date of birth  <input type="Date"   name="dob"     placeholder="Enter your DOB" class="inp" />    <br><br>
 	  Marks          <input type="Number" name="marks"   placeholder="Enter your Marks" class="inp" />  <br><br>
                   <button type="Submit" onclick="check()" class="green">Submit</button>
</form >

<script>
    
    function check() 
                    {
                       var name=document.getElementById("name").value;
                       var regex ="/^[A-Za-z]+$/";

                          if(typeof name !=="String")
                          {
                               window.alert("Invalid student's name");
                          }
                    }
</script>   

</body>
</html>


 