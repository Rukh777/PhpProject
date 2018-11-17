<?php
$id=$_GET['id']	;
	mysql_connect("localhost","root","");
	mysql_select_db("db1");
	$sql="select * from form where  id=$id";
	
	$rs=mysql_query($sql);
	
	
	
	
	if($row=mysql_fetch_array($rs))
	{
		$first_name=$row[1];
		$last_name=$row[2];
		$Address=$row[3];
		$Date_of_Birth=$row[4];
		$email=$row[5];
		$city=$row[6];
	
	
	}
?>
<form method="post" action="updateformf.php">
<table>
	<tr>
		<td>id</td>
		<td><input type="text" name ='id'  value="  <?php echo $id;
		?>
		
	
		">
		</td>
	</tr>

	<tr>
		<td> First_Name</td>
		<td><input type="text" name='fn' value="  <?php
			echo $first_name;
		?>
		
		">
	</tr>
	<tr>
		<td>Last_Name</td>
		<td><input type="text" name='ln' value="		<?php
			echo $last_name;
		?>
		">
		</td>
	</tr>
	<tr>
		<td>Address</td>
		<td><input type="text" name='ad' value="   <?php
			echo $Address;
		?>
		
		">
		</td>
	</tr>
	<tr>
		<td>Date Of  Birth</td>
		<td><input type="text" name='dob' value= "  <?php
			echo $Date_of_Birth;
			?>
		">
		</td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name='em' value="		<?php
			echo $email;
		?>
		
		">
	</tr>
	<tr>
		<td>City</td>
		<td><input type="text" name='ct' value="   <?php
			echo $city;
		?>
		
		">
		</td>
	
	</tr>

	<tr>
		
		<td colspan="2" align="center"><input type="submit" value="update"></td>
	</tr>


</table>
</form>
