<!DOCTYPE html>
<html>
<h1>Record view Page</h1>
<head>
  <link rel="stylesheet" type="text/css" href="CSS.css">
</head>

<button  onclick = "window.location.href = 'admin.php'; " class="log blue"> Go Back </button>
<body>
  <?php

$con=mysqli_connect("localhost","root","","demo");

 $roll=$_POST['roll']??"";
            
        if($roll=='')
        { 
            $sql="SELECT * FROM records ";
            $result=mysqli_query($con,$sql);

            if(mysqli_num_rows($result)!=0)
            {
               while($i=mysqli_fetch_assoc($result))
               {
                  echo "Name : ".$i['Fullname'].'<br>'."Roll No. : ".$i['RollNo'].'<br>'."DOB : ".$i['Dateofbirth'].'<br>'."Marks : ".$i['Marks'].'<br><br>';
               }
            }    

            else
            {
              echo "no records exists in the database";
              header("refresh:2; url=admin.php");
            }
        }
         

        else
        { 
            $sql="SELECT * FROM records WHERE RollNo='$roll' ";
            $result=mysqli_query($con,$sql);

            if(mysqli_num_rows($result)==1)
            {
               $i=mysqli_fetch_assoc($result);
               
               echo "Name : ".$i['Fullname'].'<br>'."Roll No. : ".$i['RollNo'].'<br>'."DOB : ".$i['Dateofbirth'].'<br>'."Marks : ".$i['Marks'].'<br><br>'; 
            }    

            else
            {
              echo "no record exists in the database";
              header("refresh:2; url=admin.php");
            }
        } 

?>
</body>
</html>
