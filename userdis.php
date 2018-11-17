<body>
				<table border='1' width='100%' cellspacing='0' align='center' bordercolor=''> 
					<tr align='center'>
						<td width='' colspan='2' >
						<img src='lv3.jpg' height='80' width='100%'>
							</td>
						
						<td width='100%' colspan='5' >
								
								<img src='Spy.jpg' height='80' width='100%'>
								
						</td>
						
					</tr>
					<?php
							mysql_connect('localhost','root','');
							mysql_select_db('db');
							
							$sql="select * from Design";
	
							$rs=mysql_query($sql);
							echo "<tr align='center'>";
							echo "<td colspan='4' style='background-color:black';>";
							while($row=mysql_fetch_array($rs))
							{
							
	                                
										
										
								echo"<a href='userdis.php?ct=$row[1]'style='text-decoration:none;color:orange'>$row[1]</a>";
								
								echo"&nbsp;";
								echo"&nbsp;";
								echo"&nbsp;";
								echo"&nbsp;";
								echo"&nbsp;";
								
							}
							echo "</td>";
					echo "</tr>";
		
	
					?>
					
					
					<tr align='center' >
						<td colspan='4'>
						
	<?php

	
	
	$Category=$_GET['ct'];
	mysql_connect('localhost','root','');
	mysql_select_db('db');
	
	$sql="select * from Product1 where Category='$Category'";
	$ds=mysql_query($sql);
	//echo $sql;
	while($row=mysql_fetch_array($ds))
	{
					
		
		echo"<tr>";
			/*echo"<td>";
				echo $row[0];
			echo"</td>";*/
			echo"<td colspan='2'>";
				echo "<img src='upload/$row[5]' height='200' width='100%'>";
			echo"</td>";
			
			echo"<td>";
				echo "<font face='Algerian' size='+3' color='purple'> $row[2]</font>";
				echo"<br>";
				echo $row[1];
				echo"<br>";
				echo $row[4];
				echo"<br>";
				echo"<font color='red'><B>Rs</B></font>";
				echo "<font color='blue'>$row[3]/-</font>";
			echo"</td>";
			/*echo"<td>";
				
			echo"</td>";
			echo"<td>";
				
			echo"</td>";
			echo"<td>";
				echo $row[4];
			echo"</td>";*/
	}
	



?>


      </td>
					
	</tr>
				
</table>

