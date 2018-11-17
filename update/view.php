
<table border='1' align='center'>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>age</th>
			<th>Click to</th>
			<th>Click to</th>
		</tr>
		
	
<?php
	
	mysql_connect("localhost","root","");
	mysql_select_db("frstdb");
	$sql="select * from student";
	
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
			echo"<a href='delete.php?id=$row[0]'>Delete</td>";
		echo "</td>";
		echo "<td>";
			echo"<a href='update.php?id=$row[0]'>Update</td>";
		echo "</td>";
	echo "</tr>";
	}

	
?>
</table>
