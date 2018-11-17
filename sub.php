<?php
	$category=$_GET['cat'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("db");		
	
	$sql="select * from Product1 where Category=$Category";
	$run=mysql_query($sql);
	
		if($run)
			echo'working';
		else
			echo'not working';
		
		echo'<table align="center">';
			while($row=mysql_fetch_array($run))
			{
				echo'<tr align="center">';
					echo'<td>';
						echo"<a href='productdisplay.php?subcategory=$row[2]'>$row[2]</a>";
					echo'</td>';
				echo'</tr>';
			}
		echo'</table>';
		
?>