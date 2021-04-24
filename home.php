<?php 

session_start();

$con = mysqli_connect('localhost','root','Soumya@69410115');
mysqli_select_db($con, 'quizdbase');

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </head>
 <body class="container">

 	<br><h1 class="text-center text-primary">STIGE Project Quiz</h1><br>
 	<h2 class="text-center">Welcome to the Quiz Master</h2>
<div  class="col=xl-8 col-lg-8 col-md-8 col-sm-8 m-auto d-block">
 	<div>
 		<h3 class="text-center card-header">You have to select only one out of 4 options. Best of Luck :)</h3>

 	</div><br>

<form action="check.php" method="post">
	
<?php  

for($i = 1; $i < 6; $i++){
$q = "select * from questions where qid = $i";
$query = mysqli_query($con,$q);

while ($rows = mysqli_fetch_array($query) ){
?>

<div class="card">
	<h4 class="card-header"> <?php echo $rows['question'] ?> </h4>

	<?php
		$q = "select * from answers where ans_id = $i";
		$query = mysqli_query($con,$q);

		while ($rows = mysqli_fetch_array($query) ){
			?>

			<div class="card-body">
				
				<input type="radio" name="quizcheck[<?php echo $rows['ans_id']; ?>]" value ="<?php echo $rows['aid'];?>">
				<?php echo $rows['answer']; ?>

			</div>

<?php  
	}
	}
	}

		?>

		<input type="submit" name="submit" value="Submit" class="btn btn-success m-auto d-block">

</form>
</div>
</div><br><br>
	
	<div class="m-auto d-block">
		<a href="logout.php" class="btn btn-primary"> LOGOUT </a>
	</div><br><br>

<div>
	<h5 class="text-center"> @Designed by Soumyadip Das </h5>
</div><br><br>

</div>

 </body>
</html>