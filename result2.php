
<?php
session_start();

$con=mysqli_connect("fdb26.awardspace.net" , "3072694_sample", "sahaj@123", "3072694_sample");
//mysqli_select_db($con,"3072694_sample");
$name = $_SESSION['username'];
$j = 2;
$q = "update sampletable set save = $j where name = '$name'";
$query = mysqli_query($con, $q);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Your Result</title>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
 	 <!-- font awesome -->
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="	sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
 	 <!--Import Google Icon Font-->
 	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 	 <!-- Compiled and minified CSS -->
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
 	<style>
 		td{
 			border: 2px solid blue;
 			font-size: 30px;
 			width: 50%;
 		}
 	</style>
</head>
<body>
	<a href="logout.php" class="btn">logout</a>
	<h2 class="center">Hello <?php echo $_SESSION['username'] ?>, your result is here : )</h2>
	<table class="container">
		<td>marks</td>
		<td>
			<?php 
			$result = 0;
			$i = 1;
			$name = $_SESSION['username'];
			#$selected = array(0,0,0,0);
	if (isset($_POST['submit'])) {
		if(!empty($_POST['ans'])){
			$count = count($_POST['ans']);
			$selected = $_POST['ans'];	
			$q = "select * from questions2";
			$query = mysqli_query($con, $q);
			while($rows = mysqli_fetch_array($query)){
				if(array_key_exists($i, $selected)){
					if($rows['ansid'] == $selected[$i]){
					$result++;
					}
				}
				$i++;
			}
		}

	}
	$name = mysqli_real_escape_string($con, $name);
	$q = "update sampletable set p2 = $result where name = '$name'";
	$query = mysqli_query($con, $q);
	echo $result;

			?>
				
		</td>
	</table>
	<a href="quiz3.php" class="btn right">go to section 3</a>
</body>
</html>