<?php

	require_once 'dbconfig.php';

	if(isset($_POST['btn-save']))
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


	        $sql_query= "INSERT INTO content(first_name,last_name,address,city,province,country,zip,phone,email) VALUES('$first_name','$last_name','$address', '$city','$province','$country','$zip','$phone','$email')";


	        if (mysqli_query($conn, $sql_query)) 
		{
   			?>
			<script type="text/javascript">
  			alert('Data Are Inserted Successfully ');
 			window.location.href='update-delete.php';
  			</script>
  			<?php
 		}
 		else
 		{
  			?>
  			<script type="text/javascript">
  			alert('error occured while inserting your data');
  			</script>
  			<?php
 		}
	}

?>

<!DOCTYPE html>
<html>
	<head>
		
		<title>Adding Data</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	<body>
		<center>

			<div id="header">
 			<div id="content">
    				<label>Adding Data</label>
    			</div>
			</div>
			<div id="body">
		 	<div id="content">
    				<form method="post">
					
    					<table align="center">
    						<tr>
    						<td align="left"><a href="update-delete.php">BACK TO MAIN PAGE</a></td>
    						</tr>
    					
						<tr>
    						<td><input type="text" name="first_name" placeholder="First Name" required /></td>
    						</tr>
    						
						<tr>
    						<td><input type="text" name="last_name" placeholder="Last Name" required /></td>
    						</tr>
    
						<tr>
    						<td><input type="text" name="address" placeholder="Address" required /></td>
    						</tr>

    						<tr>
    						<td><input type="text" name="city" placeholder="City" required /></td>
    						</tr>

    						<tr>
    						<td><input type="text" name="province" placeholder="Province" required /></td>
    						</tr>

    						<tr>
    						<td><input type="text" name="country" placeholder="Country" required /></td>
    						</tr>

    						<tr>
    						<td><input type="text" name="zip" placeholder="Postal Code" required /></td>
    						</tr>

    						<tr>
    						<td><input type="text" name="phone" placeholder="Phone" required /></td>
    						</tr>

    						<tr>
    						<td><input type="text" name="email" placeholder="Email Address" required /></td>
    						</tr>

    						<tr>
    						<td>
							<button type="submit" name="btn-save"><strong>SAVE</strong></button>
						</td>
    						</tr>
    					</table>
    				</form>
    			</div>
			</div>

		</center>
	</body>
</html>

