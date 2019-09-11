<html >
<head>
  <meta charset="UTF-8">
  <title>Add transaction details</title>
  
  
  
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
          <input type="text" name="acc_no" placeholder="Acc_no">
          <span class="fontawesome-user"></span>
          <input type="text" name="saving" placeholder="Savings">
          <span class="fontawesome-user"></span>
          <input type="text" name="loan" placeholder="Loan">
          <span class="fontawesome-user"></span>
         <input type="text" name="withdrawal" placeholder="Withdrawal">
        <input type="submit" value="Insert">

</form>
  
  </center> <center><li><a href=HOME.PHP>Back to home page.</a></li> </center> 
   </center> <center><li><a href=transaction_display.PHP>View details.</a></li> </center>
</body>
</html>
<?php
include('dbconnect.php');

$acc_no= filter_input(INPUT_POST,'acc_no');
$savings=filter_input(INPUT_POST,'savings');
$loan=filter_input(INPUT_POST,'loan');
$withdrawal=filter_input(INPUT_POST,'withdrawal');

$sql="INSERT INTO `transaction`(`acc_no`, `savings`, `loan`, `withdrawal`) VALUES ('$acc_no','$savings','$loan','$withdrawal')";
 
if(!mysqli_query($conn,$sql))
{
   echo 'values not inserted';
}
else
{
  echo ' inserted';
}

?>
