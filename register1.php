<?php
session_start();

$con=mysqli_connect("fdb26.awardspace.net" , "3072694_sample", "sahaj@123", "3072694_sample");
//mysqli_select_db($con,"3072694_sample");

$name = $_POST['user'];
$pass = $_POST['password'];

$s1 = "select * from sampletable where name = '$name'";
$result1 = mysqli_query($con, $s1);
$num1 = mysqli_num_rows($result1);

if($num1 == 0){
	$reg = "insert into sampletable(name,password,points,p2,p3,p4,save) values ('$name' , '$pass',0,0,0,0,3)";
	mysqli_query($con, $reg);
	header("location:index.php");
}else{
	echo "you are already registered";
}


?>