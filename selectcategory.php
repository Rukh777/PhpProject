<table border='1' cellspacing='0' align='center'> 
	<tr>
		<td>
			CATEGORY
		</td>
		<td>
		<?php
	mysql_connect('localhost','root','');
	mysql_select_db('db');
	
	$sql="select * from Design";
	$ds=mysql_query($sql);
echo"
			<select >";
	while($row=mysql_fetch_array($ds))
	{
	echo"
				<option > $row[1]</option>";
	}		
	
	
	
?>
</select></td>
		
	</tr>
	
</table>