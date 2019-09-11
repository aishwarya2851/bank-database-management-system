<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Add new employee</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <html lang="en-US">
<head>
  <meta charset="utf-8">
    <title>Login</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">

</head>
    <div id="login">
        <form name='form-login'  method="post">
        <span class="fontawesome-user"></span>
          <input type="text" name="name" placeholder="Name">
          <span class="fontawesome-user"></span>
          <input type="text" name="ssn" placeholder="SSN">
          <span class="fontawesome-user"></span>
          <input type="text" name="eaddress" placeholder="eAddress">
          <span class="fontawesome-user"></span>
         <input type="text" name="branch_id" placeholder="BRANCH_ID">
        <span class="fontawesome-user"></span>
        <input type="text" name="emp_id" placeholder="EMPLOYEE_ID">
      <input type="submit" value="Insert">
        
      

</form>
  </center> <center><li><a href=HOME.PHP>Back to home page.</a></li> </center> 
   </center> <center><li><a href=employee_display.PHP>View details.</a></li> </center>
  
<?php
include('dbconnect.php');

$name= filter_input(INPUT_POST,'name');
$ssn=filter_input(INPUT_POST,'ssn');
$eaddress=filter_input(INPUT_POST,'eaddress');
$branch_id=filter_input(INPUT_POST,'branch_id');
$emp_id=filter_input(INPUT_POST,'emp_id');


$sql="INSERT INTO `emplyee`(`ename`, `ssn`, `eaddress`, `emp_id` ,`branch_id`) VALUES ('$name','$ssn','$eaddress','$emp_id','$branch_id')";

if(!mysqli_query($conn,$sql))
{
   echo 'values not inserted';
}
else
{
  echo ' inserted';
}

?>
</body>
</html>