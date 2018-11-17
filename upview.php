
<table border='1' align='center' width='100'	>
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>Age</th>
			<th>Photo</th>
			
		</tr>
		
	
<?php
	
	mysql_connect("localhost","root","");
	mysql_select_db("firstdb");
	$sql="select * from Up";
	
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
			echo "<img src='upload/$row[3]' height='50' width='50'>";
		echo "</td>";
			
	echo "</tr>";
	}

	
?>
</table>
