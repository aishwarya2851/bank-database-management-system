<html >
<head>
  <meta charset="UTF-8">
  <title>Add account details</title>
  
  
  
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
          <input type="text" name="Acc_type" placeholder="Acc_type">
          <span class="fontawesome-user"></span>
          <input type="text" name="Amount" placeholder="Amount">
          <span class="fontawesome-user"></span>
          <input type="text" name="acc_no" placeholder="Acc_no">
          <span class="fontawesome-user"></span>
         <input type="text" name="branch_id" placeholder="Branch_id">
        <input type="submit" value="Insert">

</form>
  
  </center> <center><li><a href=HOME.PHP>Back to home page.</a></li> </center> 
   </center> <center><li><a href=account_display.PHP>View details.</a></li> </center>
</body>
</html>
<?php
include('dbconnect.php');

$Acc_type= filter_input(INPUT_POST,'Acc_type');
$Amount=filter_input(INPUT_POST,'Amount');
$acc_no=filter_input(INPUT_POST,'acc_no');
$branch_id=filter_input(INPUT_POST,'branch_id');

$sql="INSERT INTO `account`(`Acc_type`, `Amount`, `acc_no`, `branch_id`) VALUES ('$Acc_type','$Amount','$acc_no','$branch_id')";

if(!mysqli_query($conn,$sql))
{
   echo 'values not inserted';
}
else
{
  echo ' inserted';
}

?>