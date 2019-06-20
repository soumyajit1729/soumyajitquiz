<!DOCTYPE html>
<html>
<head>
 <title>Form site</title>
</head>
<style type="text/css">
body{
	background-image: url("bac3.jpg");
	
	margin: 0px;
	background-size: cover;
	
 
	background-repeat: no-repeat;

}
h1{
		text-align: center;
		font-size: 70px;
	}
	header.sec{
		height: 65vh;
		background-color: rgba(255,255,255,0.3);
		padding-left: 25px;
		padding-right: 25px; 
		margin-top: 0px;

		
	}
	.frm1{
		position: absolute;
		
		width: 430px;
		top:40%;
		left:35%;
		padding-left: 10px;
		padding-right: 10px;
		border: 2px solid black;
		border-radius: 10px;
		font-size: 30px;

	
	}
	.btn{
		width: auto;
    	height: 30px;
    	font-size: 20px;
    	margin-bottom: 10px;
	}
</style>


<body>
	<h1 class="hea">SIGN UP</h1>
	<header class="sec">
		
	<div id ="frm" class="frm1">
<form method="post" action="connect.php">
	<p>
Username : <input type="text"  input style="font-size: 20px" name="username"><br>
</p>
<p>
Password : <input type="password" input style="font-size: 20px" name="password"><br>
</p>
<input type="submit" class="btn" value="Submit">
	</form>

	</div>

</header>
</body>
</html>
