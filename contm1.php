<head>
</head>

<body style='background-color:';>
	<table align='center' width='100%' border='0' cellpadding='10'>
		<?php 
		$col=$_GET['col'];
			$con=mysqli_connect('localhost','root','','rstudio');
								//mysql_select_db('rstudio');
								
								//$sql="select * from click where col='$col'";
								//$ds=mysql_query($sql);
						
										 $r=mysqli_query($con, "select * from click where col='$col'");
								
								
							
		echo"<tr align='center'>
			<td colspan='2' bgcolor='#c12267'>
		<font face=	'Vijaya' size='+5' color='white'>////$col////</font>
			</td>
		</tr>";
		
		?>
		
		<?php
		$col=$_GET['col'];
			$con=mysqli_connect('localhost','root','','rstudio');
								//mysql_select_db('rstudio');
								
								//$sql="select * from click where col='$col'";
								//$ds=mysql_query($sql);
						
										$r=mysqli_query($con, "select * from click where col='$col'");
								while($row=mysqli_fetch_array($r))
								{
								
								$col=$row[1];
								$pic=$row[2];
								$des=$row[3];
								
								
								echo"<tr align='center'>
			<td>
			<font face=	'Traditional Arabic' size='+5' color='2b60de' >	$des</font>
			
			</td>
			<td>
				<img src='$pic' height='500' width='100%'>
			</td>
		</tr>";
								}
							?>	
								
								
	</table>
</body>