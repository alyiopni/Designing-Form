<?php

	require_once 'dbconfig.php';

	if(isset($_GET['delete_id']))
	{
 		$sql_query="DELETE FROM content WHERE id=".$_GET['delete_id'];

		if (mysqli_query($conn, $sql_query)) 
		{
    			//echo "Record deleted successfully";
		} 
		else 
		{
    			//echo "Error deleting record: " . mysqli_error($conn);
		}
 		header("Location: $_SERVER[PHP_SELF]");
	}


?>

<!DOCTYPE html>
<html>
	<head>
		<title>Updating and Deleting</title>
		<link rel="stylesheet" href="style.css" type="text/css" />

		<script type="text/javascript">
		function edit_id(id)
		{	
 			if(confirm('Are you sure to edit?'))
 			{
  				window.location.href='edit.php?edit_id='+id;
 			}
		}
		function delete_id(id)
		{
 			if(confirm('Are you sure to Delete ?'))
 			{
  				window.location.href='update-delete.php?delete_id='+id;
			 }
		}
		</script>

	</head>
	<body>
		<center>

			<div id="header">
 			<div id="content">
   				<label>Updating and Deleting</label>
  			</div>
			</div>

			<div id="body">
 			<div id="content">
    				<table class="ud" align="center">

    					<th><div style="width: 80px" >First Name</div></th>
    					<th><div style="width: 80px" >Last Name</div></th>
    					<th><div style="width: 150px" >Address</div></th>
    					<th><div style="width: 100px" >City</div></th>
    					<th><div style="width: 100px" >Province</div></th>
    					<th><div style="width: 80px" >Country</div></th>
    					<th><div style="width: 100px" >Postal Code</div></th>
    					<th><div style="width: 80px" >Phone</div></th>
    					<th><div style="width: 150px" >Email Address</div></th>
    
				    	<th colspan="2">Operations</th>
    					<?php
 						$sql_query="SELECT * FROM content";
 						$result_set=mysqli_query($conn, $sql_query);
 						while($row=mysqli_fetch_row($result_set))
 						{
  							?>
        						<tr class="ud">
        						<td><?php echo $row[1]; ?></td>
        						<td><?php echo $row[2]; ?></td>
        						<td><?php echo $row[3]; ?></td>
							<td><?php echo $row[4]; ?></td>
							<td><?php echo $row[5]; ?></td>
							<td><?php echo $row[6]; ?></td>
							<td><?php echo $row[7]; ?></td>
							<td><?php echo $row[8]; ?></td>
							<td><?php echo $row[9]; ?></td>

  							<td align="center"><a href="javascript:edit_id('<?php echo $row[0]; ?>')"><button type="submit" name="edit"><strong>Edit</strong></button></a></td>
		        				<td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><button type="submit" name="delete"><strong>Delete</strong></button></a></td>
        						</tr>
        						<?php
 						}
 					?>
    				</table>

				<table align=left>
					<tr>
                                        <th colspan="12" align="left" ><a href="create.php">ADD NEW DATA HERE</a></th>
                                        </tr>

				</table>
    			</div>
			</div>

		</center>
	</body>
</html>
