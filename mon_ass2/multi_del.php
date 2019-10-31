<?php
	include('connect.php');
	if(isset($_POST["multi"]))
{	
 foreach($_POST["multi"] as $id)
 {	
  mysqli_query($con,"delete from `profile` where id='$id'");
 }
}
?>