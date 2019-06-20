<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"login");
$username=$_POST['user'];
$password=$_POST['pass'];



$result=mysqli_query($con,"select * from user where username='$username' and password='$password'")
or die("failed to query database".mysqli_error($con));

if(mysqli_num_rows($result)==1)
{
	echo "login success!!";

}
else
{
	echo "failed to login";
}
?>