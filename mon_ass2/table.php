<?php
include('connect.php');
	if(isset($_POST['show'])){
		?>
		<script type = "text/javascript">
	$(document).ready(function(){
		document.getElementById("form-inline").reset();
	});
	</script>
		<table>
			<thead>
				<th>checkbox</th>
				<th>S.No</th>
				<th><a class="column_sort" id="firstname-asc" >Firstname</a></th>
				<th><a class="column_sort" id="lastname-asc">Lastname</a></th>
				<th><a class="column_sort" id="email-asc">Email</a></th>
				<th><a class="column_sort" id="age-asc">Age</a></th>
				<th>Edit</th>
				<th>Delete</th>
			</thead>
				<tbody>
					<?php
						$quser=mysqli_query($con,"select * from profile");
						$count = 0;
						while($row = mysqli_fetch_array($quser)){
							?>
								<tr>
									<td><input type="checkbox" name="id" value="<?php echo $row["id"]; ?>" /></td>
									<td><?php echo ++$count; ?></td>
									<td><?php echo $row['firstname']; ?></td>
									<td><?php echo $row['lastname']; ?></td>
									<td><?php echo $row['email']; ?></td>
									<td><?php echo $row['age']; ?></td>
									<td><a href="edit.php?id=<?php echo $row['id']; ?>"> Edit</a> </td>
									<td><button class="delete" value="<?php echo $row['id']; ?>"> Delete</button>
									
									
									</td>
								</tr>
								 <?php
						}
						
					?>
					<div align="center">
						<button type="button" name="btn_delete"  id="btn_delete" >Multi_Delete</button>
					    </div>
							
				</tbody>
			</table>
		<?php
	}
	
?>