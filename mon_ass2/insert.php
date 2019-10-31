<?php
	include('connect.php');
	if(isset($_POST['add'])){
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$age=$_POST['age'];
		
		
		$res= mysqli_query($con,"insert into `profile` (firstname, lastname,email,age) values ('$firstname', '$lastname', '$email', '$age')");
	}print_r($res);
?>