<html> 
<head> 
 <title>Add Data</title> 
</head> 
 
<body> 
<?php 
//including the database connection file 

include_once("config.php"); 
if(isset($_POST['Submit'])) {  
 $name = $_POST['name']; 
 $age = $_POST['age']; 
 $email = $_POST['email']; 
 
  //insert data to database  
  $result = mysqli_query($mysqli, "INSERT INTO users(name,age,email) VALUES('$name','$age','$email')"); 
   
  //display success message 
  echo "<font color='green'>Data added successfully."; 
    echo "<br/><a href='index.php'>View Result</a>"; 
 
} 
?> 
</body> 
</html> 
 