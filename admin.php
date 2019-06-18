<!DOCTYPE html>
<html>
<title>Welcome admin</title>
<h1> Admin Page </h1>

<head>
	<link rel="stylesheet" type="text/css" href="CSS.css">
</head>

<body>
<button  onclick = "window.location.href = 'login.php'; " class="log blue"> Logout </button>
   
  What would you like to do?
<a href="Create.php"><h4> Create New Student Account</h4></a>
<a href="Update.php"><h4> Update Student Account</h4></a><br>

<h2>View student Records</h2>

<form action="redirect.php" method="POST">
	<fieldset >
		<legend>Choose the record you want to see</legend>
      
      <input type="radio" id="single" name="number" value="Single">
      <label for="single"> Single</label>
    <br>

      <input type="radio" id="all" name="number" value="all">
      <label for="all"> All</label>

	</fieldset>
	<br><input type="submit" value="Submit" class="submit green" />
 	   
</form>
</body>
</html>
