<!DOCTYPE html>
<html>
<head>
	<title>user login</title>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
 	 <!-- font awesome -->
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="	sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
 	 <!--Import Google Icon Font-->
 	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 	 <!-- Compiled and minified CSS -->
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
</head>
<body>
	
	<div class="row">
		<div class="col l4 offset-l4 m10 offset-m1 s12">
			<h2>login here : )</h2>
			if you are not registered please register first.
			<div class="card-panel">

				<form action="login1.php" method="post" class="input-field">
				<div class="row input-field">
					<input type="text" name="user" required id="un">
					<label for="un">UserName</label>
				</div>
				<div class="row input-field">
					<input type="password" name="password" required id="password">
					<label for="password">Password</label>
				</div>
				
				
				<button type="submit" class="btn">submit</button>
				<a href="register.php" class="btn">Register</a>
				</form>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
	<script>
		$(document).ready(function() {
    	M.updateTextFields();
  		});
	</script>
</body>
</html>