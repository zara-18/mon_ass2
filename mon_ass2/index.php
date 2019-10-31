<?php
	include('connect.php');
?>
<!DOCTYPE html>
<html>
	<head>
		
	</head>
<body>
	         
				
					<form>
						
							<label>Firstname:</label>
							<input type  = "text"  id = "firstname" class = "form-control">
						     <br><br>
						
							<label>Lastname:</label>
							<input type  = "text" id = "lastname" class = "form-control">
						    <br><br>
							<label>Email:</label>
							<input type  = "text"  id = "email" class = "form-control">
						    <br><br>
							<label>Age:</label>
							<input type  = "number"  id = "age" class = "form-control">
						    <br><br>
							<div><button type = "button" id="addstdnt" >submit</button></div>
						
					</form>
				
                <br>
			
			<div id="valuestable"></div>
			
		
	
</body>
<script src = "js_files/jquery-3.4.1.min.js"></script>	
<script src="js_files/script.js"></script>
</html>