<?php  
$name = $_POST['name']; 
$age = $_POST['age']; 
$city = $_POST['city']; 
 
$con = new mysqli('localhost', 'root', '', 'test1'); 
if($con->connect_error) 
{ 
echo("Error"); 
} 
 
$stmt = $con->prepare("insert into users2(name,age,city) values (?,?,?)"); 
$stmt->bind_param("sis",$name,$age,$city); 
if($stmt->execute()) 
{ 
echo("success"); 
} 
else 
{ 
echo("fail"); 
} 
 
?>