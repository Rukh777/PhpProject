
<table border='1' align='center' width='70%'>
		<tr align='center'>
			<th>id</th>
			<th>Category</th>
			<th>Photo</td>
		    <th>Click to</th>
		    <th>Click to</th>
		</tr>
		
	
<?php
	
	mysql_connect("localhost","root","");
	mysql_select_db("db");
	$sql="select * from Product1";
	
	$rs=mysql_query($sql);
	
	while($row=mysql_fetch_array($rs))
	{
	
	echo "<tr align='center'>";
		echo "<td>";
			echo $row[0];
		echo "</td>";
		echo "<td>";
			echo $row[1];
		echo "</td>";
		echo "<td>";
			echo "<img src='upload/$row[4]' height='50' width='50'>";
		echo "</td>";
		
		echo "<td>";
			echo"<a href='Catalgdelete.php?id=$row[0]'>Delete</td>";
		echo "</td>";
		echo "<td>";	
			echo"<a href='Catalgupdate.php?id=$row[0]'>Update</td>";
		echo "</td>";
	echo "</tr>";
	}

	
?>
</table>
