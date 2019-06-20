<?php
session_start();
$con=mysqli_connect("fdb26.awardspace.net" , "3072694_sample", "sahaj@123", "3072694_sample");
//mysqli_select_db($con,"3072694_sample");

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from sampletable where name = '$name' and password = '$pass'";
$s1 = "select * from sampletable where name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
$result1 = mysqli_query($con, $s1);
$num1 = mysqli_num_rows($result1);

$query = mysqli_query($con, $s);
$rows = mysqli_fetch_array($query);

if($num == 1 and $rows['save'] == 3){
	$_SESSION['username'] = $name;
	header("location:quiz.php");
}elseif ($num == 1 and $rows['save'] == 1) {
	$_SESSION['username'] = $name;
	header("location:quiz2.php");
}elseif ($num == 1 and $rows['save'] == 2) {
	$_SESSION['username'] = $name;
	header("location:quiz3.php");
}else if($num1 == 0){
	echo "<h1>$name you are not registered now, please first register</h1>";
}else{
	echo "<h1>you fotgot your password</h1>";
}
?>