<!DOCTYPE html> 
<html> 
<head> 
<title>PHP Databse Example with Ajax </title> 
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
</head> 
<body> 
<h1> Enter Employee Details </h1> 
<form method="post" action="insert.php"> 
<input type="text" id="name" name="name" placeholder="Enter Name" /> 
<input type="text" id="age" name="age" placeholder="Enter Age" /> 
<input type="text" id="city" name="city" placeholder="Enter City" /> 
<button> Save Data </button> 
</form> 
<p id="result"> 
</p> 

<a href="display.php">Display</a> 
 
<!--jquery and ajax code--> 
<script> 
$("form").submit(function(e){ 
e.preventDefault(); 
 
$.post( 
"insert.php", 
{ 
name: $("#name").val(), 
age: $("#age").val(), 
city: $("#city").val() 
}, 
 
function(result) 
{ 
if(result == "success") 
{ 
 $("#result").html("Data Inserted Successfully..!"); 
} 
else 
{ 
 $("#result").html("Error Occured!"); 
} 
} 
); 
}); 
</script> 
</script> 
</body> 
<html> 