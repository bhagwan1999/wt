<?php 

include_once("config.php"); 
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); 
 ?> 
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body> 
<div class="container">
<a href="add.html">Add New Data</a><br/><br/> 
 
 <table class="table"> 
    
<tr bgcolor='#CCCCCC'>   <td>Name</td>   <td>Age</td>   <td>Email</td>  </tr>

 <?php  
 
 while($res = mysqli_fetch_array($result)) {      
 echo "<tr>";   
 echo "<td>".$res['name']."</td>";   
 echo "<td>".$res['age']."</td>";   
 echo "<td>".$res['email']."</td>";
 echo "</tr>"; 
 }
  ?>
   </table> 
</div>  
</body> 
</html>