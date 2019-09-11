<html>
<head>
  <meta charset="UTF-8">
  <title>Add branch</title>
  
  
  
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
          <input type="text" name="branch_id" placeholder="branch_id">
          <span class="fontawesome-user"></span>
          <input type="text" name="ifsccode" placeholder="ifsccode">
          <span class="fontawesome-user"></span>
          <input type="text" name="location" placeholder="location">
        <input type="submit" value="Insert">

</form>
</center> <center><li><a href=HOME.PHP>Back to home page.</a></li> </center> 
 </center> <center><li><a href=branch_display.PHP>View details.</a></li> </center>
  
</body>
</html>

<?php
include('dbconnect.php');

$branch_id= filter_input(INPUT_POST,'branch_id');
$ifsccode=filter_input(INPUT_POST,'ifsccode');
$location=filter_input(INPUT_POST,'location');

$sql="INSERT INTO `branch`( `branch_id`,`ifsccode`, `location`) VALUES ('$branch_id','$ifsccode','$location')";

if(!mysqli_query($conn,$sql))
{
   echo 'values not inserted';
}
else
{
  echo ' inserted';
}

?>

