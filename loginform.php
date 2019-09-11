<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>CodePen - Login </title>

  <link rel="stylesheet" href="css/reset.css">

  <link rel="stylesheet" href="assets/css/style1.css" media="screen" type="text/css" />

</head>

<body>
<CENTER> <H1>BANK MANAGEMENT SYSTEM </H1></center>
  <div class="wrap">
		<div class="avatar">
      <img src="ECOMMERCE.JPG">
		</div>
      <form action="loginform.php" method="post">
		<input type="text" name="username" placeholder="username" required>
		<div class="bar">
			<i></i>
		</div>
		<input type="password"name="password" placeholder="password" required>
		<a href="" class="forgot_link"></a>
                <input name="login" value="login" type="submit">
             </form>   
	</div>

    <script src="assets/js/index.js"></script>

</body>

</html>
<?php
include 'dbconnect.php';

if($login=filter_input(INPUT_POST,'login'))
{

$username =filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');



$log= "SELECT `user_id`, `password` FROM `login_form` WHERE user_id='$username' AND password='$password'";

$result= mysqli_query($conn,$log);
$count= mysqli_num_rows($result);
if($count==1)
{
    header("location:home.php");
    exit();
   
    
}
 else {
    
      echo 'username or password incorrect';
}
}
?>
