<body>
				<table border='0' width='100%' cellspacing='0' align='center' bordercolor=''> 
					
					<?php
							mysql_connect('localhost','root','');
							mysql_select_db('rstudio');
							
							$sql="select * from homeinsert";
	
							$rs=mysql_query($sql);
							echo "<tr align='center'>";
							echo "<td colspan='4' style='background-color:black;height:50px;font-size:20px;font-style:'Vivaldi';color:white'>";
							while($row=mysql_fetch_array($rs))
							{
							
	                                
										
										
								echo"<a href='userdis2.php?cat=$row[1]'style='text-decoration:none;color:orange'>$row[1]</a>";
								
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
/*$id= isset($_GET['id']) ? $_GET['id'] : '';*/
	
	
	$Catalog=isset($_GET['cat']) ? $_GET['cat']:'';
	mysql_connect('localhost','root','');
	mysql_select_db('rstudio');
	
	$sql="select * from upload where Catalog='$Catalog'";
	$ds=mysql_query($sql);
	//echo $sql;
	while($row=mysql_fetch_array($ds))
	{
					
		
		echo"<tr>";
			/*echo"<td>";
				echo $row[0];
			echo"</td>";*/
			echo"<td colspan='2' style='width:550px;padding:10px 0px;border:none'>";
				echo "<img src='upload/$row[5]' height='400' width='100%'>";
			echo"</td>";
			
			echo"<td style='padding:10px 30px';>";
				echo "<font face='Algerian' size='+3' color='purple'> $row[2]</font>";
				echo"<br>";
				echo $row[1];
				echo"<br>";
				echo $row[3];
				echo"<br>";
				echo"<font color='red'><B>Rs</B></font>";
				echo "<font color='blue'>$row[4]/-</font>";
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

