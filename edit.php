<?php

	require_once 'dbconfig.php';

	if(isset($_GET['edit_id']))
	{	
		$sql_query="SELECT * FROM content WHERE id=".$_GET['edit_id'];
 		$result_set=mysqli_query($conn, $sql_query);
  		$fetched_row=mysqli_fetch_array($result_set);
	}	
	
	if(isset($_POST['btn-update']))
	{
        	$first_name = $_POST['first_name'];
        	$last_name = $_POST['last_name'];
        	$address= $_POST['address'];
        	$city= $_POST['city'];
        	$province= $_POST['province'];
        	$country= $_POST['country'];
        	$zip= $_POST['zip'];
        	$phone= $_POST['phone'];
        	$email= $_POST['email'];

 		$sql_query = "UPDATE content SET first_name='$first_name',last_name='$last_name',address='$address',city='$city', province='$province', country='$country', zip='$zip',phone='$phone',email='$email' WHERE id=".$_GET['edit_id'];
      
		if(mysqli_query($conn, $sql_query)) 
		{
    			?>
  			<script type="text/javascript">
		  		alert('Data Are Updated Successfully');
  				window.location.href='update-delete.php';
  			</script>
  			<?php
		} 
		else 
		{
    			?>
  			<script type="text/javascript">
  			alert('error occured while updating data');
  			</script>
  			<?php
		}
	}

	if(isset($_POST['btn-cancel']))
	{
 		header("Location: update-delete.php");
	}

?>


<!DOCTYPE html>
<html>
	<head>
		
		<title>Editing</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	<body>
		<center>

			<div id="body">
 			<div id="content">
    				<form method="post">
    					<table align="center">
    						<tr>
    						<td><input type="text" name="first_name" placeholder="First Name" value="<?php echo $fetched_row['first_name']; ?>" required /></td>
    						</tr>
    
						<tr>
    						<td><input type="text" name="last_name" placeholder="Last Name" value="<?php echo $fetched_row['last_name']; ?>" required /></td>
    						</tr>
    
						<tr>
    						<td><input type="text" name="address" placeholder="Address" value="<?php echo $fetched_row['address']; ?>" required /></td>
    						</tr>

    						<tr>
    						<td><input type="text" name="city" placeholder="City" value="<?php echo $fetched_row['city']; ?>" required /></td>
    						</tr>

    						<tr>
    						<td><input type="text" name="province" placeholder="Province" value="<?php echo $fetched_row['province']; ?>" required /></td>
    						</tr>

   						<tr>
    						<td><input type="text" name="country" placeholder="Country" value="<?php echo $fetched_row['country']; ?>" required /></td>
    						</tr>

    						<tr>
    						<td><input type="text" name="zip" placeholder="Postal Code" value="<?php echo $fetched_row['zip']; ?>" required /></td>
    						</tr>

    						<tr>
    						<td><input type="text" name="phone" placeholder="Phone" value="<?php echo $fetched_row['phone']; ?>" required /></td>
    						</tr>

    						<tr>
    						<td><input type="text" name="email" placeholder="Email Address" value="<?php echo $fetched_row['email']; ?>" required /></td>
    						</tr>


    						<tr>
    						<td>
    							<button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    						</td>
    						</tr>
    					</table>
    				</form>
    			</div>
			</div>

		</center>
	</body>
</html>
