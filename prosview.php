
<table border='0' align='center' width='100%' cellpadding='10' cellspacing='0' style='border-radius:50px';>
	<!--<tr align='center' bgcolor='salmon' >
		
			<th>id</th>
			<th>Catalog</th>
			<th>Collection</th>
			<th>Description</th>
		    <th>Price</th>
			<th>Photo</th>
		    <th>Click to</th>
		    <th>Click to</th>
		</tr>-->
		
	<?php
	
	mysql_connect("localhost","root","");
	mysql_select_db("rstudio");
	$sql="select * from pros";
	
	$rs=mysql_query($sql);
	
	while($row=mysql_fetch_array($rs))
	{
	echo"<tr>";
			/*echo"<td>";
				echo $row[0];
			echo"</td>";*/
			echo"<td colspan='2' style='width:550px;padding:10px 0px';>";
				echo "<img src='upload/$row[3]' height='400' width='100%'>";
			echo"</td>";
			
			echo"<td style='padding:10px 30px';>";
				echo"Name: &nbsp;&nbsp;&nbsp";
				echo "<font face='Algerian' size='+3' color='purple'> $row[1]</font>";
				echo"<br>";
				echo"Address: &nbsp;&nbsp;&nbsp";
				echo $row[2];
				echo"<br>";echo"<br>";
				echo"Descrption: &nbsp;&nbsp;&nbsp";
				echo $row[4];
				echo"<br>";echo"<br>";
				echo"Service Provider: &nbsp;&nbsp;&nbsp";
				echo $row[5];
				echo"<br>";
				echo" Contacts: &nbsp;&nbsp;&nbsp";
				echo $row[6];
				echo"<br>";
				echo"Awards: &nbsp;&nbsp;&nbsp";
				echo $row[7];
				echo"<br>";
				echo"Projects: &nbsp;&nbsp;&nbsp";
				echo $row[8];
				echo"<br>";
				/*echo"<font color='red'><B>Rs</B></font>";*/
				echo"Reviews: &nbsp;&nbsp;&nbsp";
				echo "<font color='blue'>$row[9]</font>";
				echo"<br>";echo"<br>";
				echo"<a href='rdelete.php?id=$row[0]'style='text-decoration:none;color:cyan;font-weight:bold;font-size:20px;margin-left:300px'>Delete</a>";
				echo"&nbsp;";
				echo"&nbsp;";
								echo"&nbsp;";
								echo"&nbsp;";
								echo"&nbsp;";
								echo"&nbsp;";
								echo"&nbsp;";
								echo"&nbsp;";
								echo"&nbsp;";
				echo"<a href='uploadud.php?id=$row[0]'style='text-decoration:none;color:cyan;font-weight:bold;font-size:20px';>Update</a>";
			echo"</td>";
			
	echo "</tr>";
		
	/*echo "<tr align='center' >";
		echo "<td >";
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
			echo "<img src='upload/$row[5]' height='300' width='450' >";
		echo "</td>";
		
		echo "<td>";
			echo"<a href='rdelete.php?id=$row[0]'>Delete</td>";
		echo "</td>";
		echo "<td>";	
			echo"<a href='uploadud.php?id=$row[0]'>Update</td>";
		echo "</td>";
	echo "</tr>";*/
	}

	
?>

</table>

