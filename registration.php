<?php 

session_start();

$con = mysqli_connect('localhost','root', 'Soumya@69410115');
if($con){
	header('location:home.php');
}else{
	echo "no connection";
}

mysqli_select_db($con, 'sessionpractical');

$name = $_POST['user'];
$pass = $_POST['password'];

$q = "select * from registration where name = '$name' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo"Already Exists";
}else{
	$qy = "insert into registration(email, password) values ('$name' , '$pass')";
	mysqli_query($con, $qy);
}

 ?>