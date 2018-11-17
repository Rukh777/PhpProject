
<body style='background-image: url(grey.jpg); background-repeat:no-repeat; background-size:2900px 1500px;'>
<form action='Rupload1.php' method='post' enctype='multipart/form-data'>
	<table border='0' height='300px' width='700px' align='center' cellspacing='0' cellpadding='10' bgcolor='white' style='border-radius:60px'; >
		<tr align='center'>
			<td colspan='2' >
				<table border='0' cellpadding='10' cellspacing='0' align='center' > 
					<tr>
						<td >
							<font face='Andalus' size='+3' color='95b9c7'> <b>Catalog<b></font>
						</td>
						<td>
							<?php
								$con=mysqli_connect('localhost','root','','rstudio');
								//mysql_select_db('rstudio');
								
								//$sql="select * from homeinsert";
								//$ds=mysql_query($sql);
								
								$r=mysqli_query($con, "insert into homeinsert");
							echo"
										<select name='cat'>";
								while($row=mysqli_fetch_array($r))
								{
								echo"
											<option > $row[1]</option>";
								}		
								
								
								
							?>
							</select></td>
		
						</tr>
					</table>
				</td>
			</tr>
			<tr align='center' style='border-radius:100px';>
				<td >
					<font face='Andalus' size='+3' color='95b9c7'>  Collection</font>
				</td>
				<td>
					  <input type='text' name='col'>
				</td>
			</tr>
			<tr align='center'>
				<td>
				<font face='Andalus' size='+3' color='95b9c7'> 	Description:</font>
				</td>
				<td>
					 <input type='text' name='ds'>
				</td>
			</tr>
			<tr align='center'>
				<td>
					<font face='Andalus' size='+3' color='95b9c7'> Price:</font>
				</td>
				<td>
					 <input type='text' name='pr'>
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
					 <input type='submit' value='Cancel' style= 'width:100px; height:25px; color:salmon ;background-color:black' >
				</td>
										
			</tr>
									
		</table>
	</form>
	</form>
</body>