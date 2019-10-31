<?php
	include('connect.php');
	if(isset($_POST['del'])){
		$id=$_POST['id'];
		$del = mysqli_query($con,"delete from `profile` where id='$id'");
	}print_r($del);
?>
