<head>
	<style>
			
	</style>
</head>
<body style='background-image: url(grey.jpg); background-repeat:no-repeat; background-size:2900px 1500px;'>
<form action='ideabook2.php' method='post' enctype='multipart/form-data'>
<tr bgcolor='black'>
				<td bgcolor='black' colspan='5' align='center'>
				 
						<font face='AR JULIAN' size='+9' color='white'><b style='align:left';><big><img src='ru.jpg'>DESIGN Studio</font>
						<font face='French Script MT' size='+5' color='cyan'><sub>create your world......</sub> </font>
				
				</td>
			</tr>
	<table border='0' height='300px' width='700px' align='center' cellspacing='0' cellpadding='10' bgcolor='white' style='border-radius:60px'; >
		<tr align='center'>
			<td colspan='2' >
			
				<table border='0' cellpadding='10' cellspacing='0' align='center' > 
				
					<tr>
						<td >
							<font face='Andalus' size='+3' color='95b9c7'> <b>Ideabook Catalog<b></font>
						</td>
						<td>
							
							<?php
								mysql_connect('localhost','root','');
								mysql_select_db('rstudio');
								
								$sql="select * from homeinsert";
								$ds=mysql_query($sql);
							echo"
										<select name='cat'>";
								while($row=mysql_fetch_array($ds))
								{
								echo"
											<option > $row[1]</option>";
								}		
								
								
								
							?>
							</select>
			
						</td>
		
						</tr>
					</table>
				</td>
			</tr>
		
			<tr align='center'>
				<td>
					<font face='Andalus' size='+2' color='95b9c7'><b>  Photo: </b></font>
				</td>
				<td>
					 <input type='file' name='pic'>
				</td>
			</tr>
			<tr align='center'>
				<td colspan='2'>
				     <input type='submit' value='Submit' style= 'width:100px;height:25px; color:salmon;background-color:black'>
				</td>
										
			</tr>
									
		</table>
	</form>
	</form>
</body>