<?php
require("connection1.php");
?>
<html>
<head>
<title>Fast Food Ordering System</title>
<meta charset="utf-8" name="viewport" content="width-device-width,intial-scale-1.0,shrink>
<link rel="stylesheet" href="fontawesome/css/all.css" >
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<div class="login-form">
<h2>Admin Login Panel</h2>
<form method="POST" >
<div class="input-field">
<i class="fas fa-user"></i>
<input type="text" placeholder="Admin Name" name="AdminName">
</div>

<div class="input-field">
<i class="fas fa-user"</i>
<input type="password" placeholder="Password" name="AdminPassword">
</div>


<button type="submit" name="signin">Sign In</button>
</form>
</div>
<?php

if(isset($_POST['signin']))
{
$query="SELECT * FROM admin_login WHERE admin_name='$_POST[AdminName]' AND admin_password='$_POST[AdminPassword]' ";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0)
{
  session_start();
    $_SESSION['AdminLoginId']=$_POST['AdminName'];
     header("location:adminpanel.php");
}
else
{
echo"<script>alert('Incorrect Password');</script>";
}


}

?>
</body>
</html>

