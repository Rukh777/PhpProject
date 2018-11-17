
<table border='1' align='center'>
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>City</th>
			<th>Click to</th>
			<th>Click to</th>
		</tr>
		
	
<?php
	
	mysql_connect("localhost","root","");
	mysql_select_db("db2");
	$sql="select * from Ruff";
	
	$rs=mysql_query($sql);
	$count=0;
	while($row=mysql_fetch_array($rs))
	{
	$count++;
	echo "<tr>";
		echo "<td>";
			echo $count;
		echo "</td>";
		echo "<td>";
			echo $row[1];
		echo "</td>";
		echo "<td>";
			echo $row[2];
		echo "</td>";
		echo "<td>";
			echo"<a href='delete.php?id=$row[0]'>Delete</td>";
		echo "</td>";
		echo "<td>";	
			echo"<a href='ruffup.php?id=$row[0]'>Update</td>";
		echo "</td>";
	echo "</tr>";
	}

	
?>
</table>
