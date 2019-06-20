
<?php
session_start();

$con=mysqli_connect("fdb26.awardspace.net" , "3072694_sample", "sahaj@123", "3072694_sample");
//mysqli_select_db($con,"3072694_sample");

?>

<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
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
 		td,th{
 			border: 2px solid green;
 			font-size: 20px;
 			width: 50%;
 			background-color: yellow;
 		}
 	</style>
</head>
<body>
	<h2 class="center">hello <?php echo $_SESSION['username']; ?><br>Section-2</h2>
	<div class="row container">
	<table class="col l4 s12">
		<caption>Highest Marks</caption>
	<tr>
		<th>Name:</th>
		<th>Marks:</th>
	</tr>
	
		<?php
			$i = 0;
			$q1 = "SELECT * FROM sampletable ORDER BY p4 DESC";
			$query1 = mysqli_query($con, $q1);
			while($rows = mysqli_fetch_array($query1) and $i<5){
				$i++;
			?>
			<tr>
				<td><?php echo $rows['name']; ?></td>
				<td><?php echo $rows['p4']; ?></td>
			</tr>	
			<?php	
			}
		?>
		
	</table>
	<div class="col l6 s12">
		<h3><?php echo $_SESSION['username']; ?>,choose the correct option :) </h3>

		<form method="post" action="result2.php" class="input-field">
			<?php
			$arr = array(1,2,3,4,5);
			shuffle($arr);
			for($j = 0;$j<5;$j++){
			$i = $arr[$j];
			$q = "select * from questions2 where qid = $i";
			$query = mysqli_query($con, $q);
			while($rows = mysqli_fetch_array($query)){
		?>	
				<h4><?php echo $rows['question'] ?></h4>
				<?php
				$q = "select * from answer2 where id = $i";
				$query = mysqli_query($con, $q);
				while ($rows = mysqli_fetch_array($query)) {
				?>
				<p>
					<label>
						<input type="radio" name="ans[<?php echo $rows['id']; ?>]" value="<?php echo $rows['ansid']; ?>">
						<span><?php echo $rows['answer'] ?></span>
					</label>	
			    </p>
		<?php
			}
			}
	    }
		?>
		<button type="submit" name="submit" class="btn">submit</button>
		</form>
		

	</div>
    </div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>