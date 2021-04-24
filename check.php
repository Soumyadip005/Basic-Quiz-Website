<?php 

session_start();

$con = mysqli_connect('localhost','root','Soumya@69410115');
mysqli_select_db($con, 'quizdbase');

 ?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style type="text/css">
	.animateuse{
			animation: leelaanimate 0.5s infinite;
		}

@keyframes leelaanimate{
			0% { color: red },
			10% { color: yellow },
			20%{ color: blue }
			40% {color: green },
			50% { color: pink }
			60% { color: orange },
			80% {  color: black },
			100% {  color: brown }
		}
</style>

   </head>
   <body>
     <div class="container text-center" >
     	<br><br>
    	<h1 class="text-center text-success text-uppercase animateuse" > Quiz Master</h1>
    	<br><br><br><br>
      <table class="table text-center table-bordered table-hover">
      	<tr>
      		<th colspan="2" class="bg-dark"> <h1 class="text-white"> Results </h1></th>
      		
      	</tr>
      	<tr>
		      	<td>
		      		Questions Attempted
		      	</td>

<?php  

	$result = 0;
	$i = 1;
		
		if (isset($_POST['submit'])){

		if(!empty($_POST['quizcheck'])){

			$count = count($_POST['quizcheck']);

			//echo "Out of  5, you have selected" .$count. "options";

			$selected = $_POST['quizcheck'];
			// print_r($selected);
?>


        	<td>
            <?php
            echo "Out of 5, You have attempt ".$count." option."; ?>
            </td>

                        <?php
            // Loop to store and display values of individual checked checkbox.
            $selected = $_POST['quizcheck'];
            
            $q1 = "select * from questions";
            $query = mysqli_query($con,$q1);
            $i = 1;
            while($rows = mysqli_fetch_array($query)) {
             // print_r($rows);
            	//print_r($rows['ans_id']);

            	$checked = $rows['ans_id'] == $selected[$i];
            	
					if($checked){
						$result++;
				}

				$i++;		
            	}
            	?>

            	<tr>
    			<td>
    				Your Total score
    			</td>
    			<td colspan="2">
	    	<?php 
	            echo " Your score is ". $result.".";
	            }
	            else{
	            echo "<b>Please Select Atleast One Option.</b>";
	            }
	            } 
	          ?>
	          </td>
            </tr>

<?php  
		//$name = $_SESSION['username'];
		//$finalresult = "insert into user(username, totalques, answerscorrect) values ('$name','5','$result')";
		//$queryresult = mysqli_query($con, $finalresult);

?>

     </table>

      	<a href="logout.php" class="btn btn-success"> LOGOUT </a>
      </div>
   </body>
</html>
