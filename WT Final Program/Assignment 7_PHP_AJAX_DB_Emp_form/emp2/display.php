<?php 
include_once("config.php"); 
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated 
$result = mysqli_query($mysqli, "SELECT * FROM users2 ORDER BY id DESC"); // using mysqli_query instead 
?> 
 
<html> 
<body> 
<a href="index.php">Add New Data</a><br/><br/> 
 
 <table width='80%' border=0> 
 
 <tr bgcolor='#CCCCCC'> 
  <td>Name</td> 
  <td>Age</td> 
  <td>CIty</td> 
   
 </tr> 
 <?php  
 //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array  
 while($res = mysqli_fetch_array($result)) {    
  echo "<tr>"; 
  echo "<td>".$res['name']."</td>"; 
  echo "<td>".$res['age']."</td>"; 
  echo "<td>".$res['city']."</td>"; 
  echo "</tr>";  
    
 } 
 ?> 
 </table> 
 </body> 
</html> 