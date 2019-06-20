<!DOCTYPE html>
<html>
<meta charset="utf-8"/>

<head >
<title>
	login
</title>

</head>
<style type="text/css">
body{
	background-image: url("bac3.jpg");
	
	margin: 0px;
	background-size: cover;
	
 
	background-repeat: no-repeat;

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
	.hea{
		text-align: center;
		font-size: 70px;
	}
    .btn{
    	width: 70px;
    	height: 30px;
    	font-size: 20px;
    }

</style>

<body>
	<h1 class="hea">QUIZTOPIA</h1>
	<header class="sec">
		
	<div id ="frm" class="frm1">
		
		<form action="process.php" method="POST">
			<p>
				<label>Username:</label>
				<input type="text" input style="font-size: 20px" id="user" name="user" />
			</p>
			<p>
				<label>Password:</label>
				<input type="password" input style="font-size: 20px" id="pass" name="pass" />
			</p>
			<p>
				<input type="submit" id="btn" class="btn" value="login" />
			</p>
		</form>

	</div>

</header>
</body>
</html>