<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Add customer</title>
  
  
  
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
          <input type="text" name="address" placeholder="Address">
          <span class="fontawesome-user"></span>
         <input type="text" name="ph_no" placeholder="phone No">
        <span class="fontawesome-lock"></span>
         <input type="text" name="acc_no" placeholder="Account Number">
        <input type="submit" value="Insert">
        

</form>
  </center> <center><li><a href=HOME.PHP>Back to home page.</a></li> </center> 
  </center> <center><li><a href=customer_display.PHP>View details.</a></li> </center>
</body>
</html>
<?php
include('dbconnect.php');

$name= filter_input(INPUT_POST,'name');
$ssn=filter_input(INPUT_POST,'ssn');
$address=filter_input(INPUT_POST,'address');
$ph_no=filter_input(INPUT_POST,'ph_no');
$acc_no=filter_input(INPUT_POST,'acc_no');

$sql="INSERT INTO `customer`(`name`, `ssn`, `address`, `ph_no`, `acc_no`) VALUES ('$name','$ssn','$address','$ph_no','$acc_no')";

if(!mysqli_query($conn,$sql))
{
   echo 'values not inserted';
}
else
{
  echo ' inserted';
}

?>