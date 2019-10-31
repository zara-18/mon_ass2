<?php  
include('connect.php');
if(isset($_POST['column']) && isset($_POST['sortOrder']))
	{
		$columnName = str_replace(" ","_",strtolower($_POST['column']));
		$sortOrder  = $_POST['sortOrder'];
$select_query = "SELECT * FROM profile ORDER BY ".$columnName." ".$sortOrder." ";
$result = mysqli_query($con,$select_query);
  $count = 0;
    while($sort = mysqli_fetch_assoc($result))
			{
				?>
				
				<tr>
									<td><input type="checkbox" name="id" value="<?php echo $sort["id"]; ?>" /></td>
									<td><?php echo ++$count; ?></td>
									<td><?php echo $sort['firstname']; ?></td>
									<td><?php echo $sort['lastname']; ?></td>
									<td><?php echo $sort['email']; ?></td>
									<td><?php echo $sort['age']; ?></td>
									<td><a href="edit_modal.php?id=<?php echo $sort['id']; ?>"> Edit</a>  </td>
									<td><button class="delete" value="<?php echo $sort['id']; ?>"></span> Delete</button>
									
									
									</td>
								</tr>
								<?php
			}
}
 ?>  