<?php

$servername="localhost";
$username="root";
$password="";
$dbname="fastfoodorder";


$n=$_POST['fname'];
$a=$_POST['age'];
$e=$_POST['email'];
$add=$_POST['add'];
$c=$_POST['city'];
$s=$_POST['state'];
$phno=$_POST['mob'];
$pincode=$_POST['pin'];


$connection=mysqli_connect($servername,$username,$password,$dbname) or die('could not connect');


if(!$connection)
{
echo "error:unable to connect to mysql.<br>";
echo "<br>Debugging errno:".mysqli_connect_errno();
echo "<br>Debugging error:".mysqli_connect_error();
exit;
}

$sql="insert into order_details values('$n','$a','$e','$add','$c','$s','$phno','$pincode')";




if(mysqli_query($connection,$sql))
{
echo '<script type="text/Javascript">
      alert("Your order booked succesfully");
     </script>';

	
}
else
{
echo "error";
}
mysqli_close($connection);
?>

