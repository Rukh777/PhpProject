
<table border='1' align='center'>
		<tr>
			<th>id</th>
			<th>first name</th>
			<th>last Name</th>
			<th>Address</th>
			<th>Date of Birth</th>
			<th>Email</th>
			<th>City</th>
			<th>Click to</th>
			<th>Click to</th>
		</tr>
		
	
<?php
	
	mysql_connect("localhost","root","");
	mysql_select_db("db1");
	$sql="select * from form";
	
	$rs=mysql_query($sql);
	
	while($row=mysql_fetch_array($rs))
	{
	echo "<tr>";
		echo "<td>";
			echo $row[0];
		echo "</td>";
		echo "<td>";
			echo $row[1];
		echo "</td>";
		echo "<td>";
			echo $row[2];
		echo "</td>";
		echo "<td>";
			echo $row[3];
		echo "</td>";
		echo "<td>";
			echo $row[4];
		echo "</td>";
		echo "<td>";
			echo $row[5];
		echo "</td>";
		echo "<td>";
			echo $row[6];
		echo "</td>";
		echo "<td>";
			echo"<a href='deleteform.php?id=$row[0]'>Delete</td>";
		echo "</td>";
		echo "<td>";
			echo"<a href='updateform.php?id=$row[0]'>Update</td>";
		echo "</td>";
	echo "</tr>";
	}

	
?>
</table>
