<?php 
session_start();
if(!isset($_SESSION['AdminLoginId']))
{
header("location:adminform.php");
}
?>
<html>
    <title>Fast Food Ordering System</title>
<head>
<style>
body{
margin:0px;
 background-image:url("contactform.jpg");
            background-size:100% 150%;
}
div.header{
font-family:poppins;
display:flex;
justify-content:space-between;
align-items:center;
padding:0px 60px;
background-color:aliceblue;
}
div.header button{
background-color:aliceblue;
font-size: 16px;
font-weight: 550;
padding:8px 12px;
border:2px solid black;
border-radius: 5px;
}
a:link,a:visited{
background-color:#f44336;
color:white;
padding:14px 25px;
text-align:center;
text-decoration:none;
display:inline-block;
}
a:hover,a:active{
background-color:red;
}
</style>
<body>
<div class="header">
<h1>WELCOME TO ADMIN PANEL : <?php  echo $_SESSION['AdminLoginId']?></h1>
<form method="POST">
<button name="Logout">LOGOUT</button>
</form>
</div>
<?php
if(isset($_POST['Logout']))
{
session_destroy();
header("Location:adminform.php");
}
?>
<div class="box">


<ul type="none">
<li><a href="ecommerce2/admin.php"><b><font size="25">Add products</font></b></a></li>
<li><a href="ecommerce2/display.php"><b><font size="25">Display products</font></b></a></li>
<li><a href="ecommerce2/delete.php"><b><font size="25">Delete products</font></b></a></li>







</ul>

</div>

</body>
</html>