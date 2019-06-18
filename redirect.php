<?php

  $num=$_POST['number']??"";
         
    if($num=="Single")
    {
     	echo '  
            <link rel="stylesheet" type="text/css" href="CSS.css">
            Enter the roll number :
            <form action="allview.php" method="post"> 
       <br> <input type="number" name="roll" id="roll" class="inp"><br><br>
            <input type="submit" value="SUBMIT" class="submit">
            </form>  
           ';
    }	

    else
    {
        header("refresh:0; url=allview.php");
    }
    
?>       