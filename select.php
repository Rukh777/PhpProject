<head>
				<style>
						
						input[type=text] {
								width: 100%;
								padding: 10px 20px;
								margin: 8px 0;
								box-sizing: border-box;
								border: 1px solid salmon;
								border-radius: 3px;
						}
						input[type=number] {
								width: 100%;
								padding: 10px 20px;
								margin: 8px 0;
								box-sizing: border-box;
								border: 1px solid salmon;
								border-radius: 3px;
`						}
						select {
								width: 100%;
								padding: 10px 20px;
								margin: 8px 10;
								box-sizing: border-box;
								border: 1px solid salmon;
								border-radius:  3px;
							}
						textarea{
						
								width: 100%;
								padding: 10px 20px;
								margin: 8px 0;
								box-sizing: border-box;
								border: 1px solid salmon;
								border-radius: 3px;
						}
						</style>
		</head>

				 
<body style='background-image: url(out3.jpg); background-repeat:no-repeat; background-size:2000px 1000px;'>
<table border='0' height='100px' width='100%' align='center' cellspacing='0' cellpadding='10' bgcolor='79baec' style='border-radius:60px'; >
		
			<tr align='center' style='border-radius:100px;'>
				<td >
					<font face='Andalus' size='+5' color='Black'>Consult with Designer</font>
					
				</td>
	</tr>
	</table><br><br>
<form action='selectinsert.php' method='post' enctype='multipart/form-data'>
	<table class ='a' border='0' height='300px' width='700px' align='center' cellspacing='0' cellpadding='10' bgcolor='white' style='border-radius:60px'; >
			<br>
					<?php
					session_start();
					$u=$_SESSION['user'];
					echo "<input type='text' name='n' value='$u' hidden>";
					?>
					
			<tr align='center' style='border-radius:100px';>
				<td >
					<font face='Andalus' size='+2' color='blue'>Choose Your Designer</font>
					
				</td>
				<td>
					  
					<?php
								$con=mysqli_connect('localhost','root','','rstudio');
								//mysql_select_db('rstudio');
								
								//$sql="select distinct(designer) from entry";
								//$ds=mysql_query($sql);
								$r=mysqli_query($con, "select * from entry");
							echo"
										<select name='ch'>";
								while($row=mysqli_fetch_array($r))
								{
								echo"
								<option > select</option>
											<option > $row[1]</option>";
								}		
								
								
								
							?>
				</td>
			</tr>
			<tr align='center'>
				<td>
				<font face='Andalus' size='+2' color='blue'>Type of Space</font>
				</td>
				<td>
					  
					<?php
								$con=mysqli_connect('localhost','root','','rstudio');
								//mysql_select_db('rstudio');
								
								//$sql="select distinct(style) from entry";
								//$ds=mysql_query($sql);
								$r=mysqli_query($con, "select * from entry");
							echo"
										<select name='sp'>";
								while($row=mysqli_fetch_array($r))
								{
								echo"
											<option > $row[2]</option>";
								}		
								
								
								
							?>
				</td>
			</tr>
			<tr align='center'>
				<td>
					<font face='Andalus' size='+2' color='blue'>Style</font>
				</td>
				<td>  
					<?php
								$con=mysqli_connect('localhost','root','','rstudio');
								//mysql_select_db('rstudio');
								
								//$sql="select * from entry";
								//$ds=mysql_query($sql);
								$r=mysqli_query($con, "select * from entry");
							echo"
										<select name='sl'>";
								while($row=mysqli_fetch_array($r))
								{
								echo"
											<option > $row[3]</option>";
								}		
								
								
								
							?>
				</td>
			</tr>
			<tr align='center'>
				<td>
					<font face='Andalus' size='+2' color='blue'>State</font>
				</td>
				<td>
					 <?php
								$con=mysqli_connect('localhost','root','', 'rstudio');
								//mysql_select_db('rstudio');
								
								//$sql="select distinct(state) from entry";
								//$ds=mysql_query($sql);
								$r=mysqli_query($con, "select * from entry");
							echo"
										<select name='st'>";
								while($row=mysqli_fetch_array($r))
								{
								
										echo"	<option > $row[4]</option>";
									
								}		
								
								
								
							?>		</td>
			</tr>
			<tr align='center'>
				<td>
					<font face='Andalus' size='+2' color='blue'>City</font>
				</td>
				<td>
					 <?php
								$con=mysqli_connect('localhost','root','','rstudio');
								//mysql_select_db('rstudio');
								
								//$sql="select distinct(city) from entry";
								//$ds=mysql_query($sql);
								$r=mysqli_query($con, "select * from entry");
							echo"
										<select name='ct'>";
								while($row=mysqli_fetch_array($r))
								{
								echo"
											<option > $row[5]</option>";
								}		
								
								
								
							?>		</td>
			</tr>
			<tr align='center'>
				<td>
					<font face='Andalus' size='+2' color='blue'>Area</font>
				</td>
				<td>
					 <input type='text' name='ar'>
				</td>
				<td>
					<font face='Andalus' size='+2' color='blue'>unit</font>
				</td>
				<td>
					<?php
								$con=mysqli_connect('localhost','root','','rstudio');
								//mysql_select_db('rstudio');
								
								//$sql="select distinct(unit) from entry";
								//$ds=mysql_query($sql);
								$r=mysqli_query($con, "select * from entry");
							echo"
										<select name='un'>";
								while($row=mysqli_fetch_array($r))
								{
								echo"
											<option > $row[7]</option>";
								}		
								
								
								
							?>
				</td>
			</tr>
			<tr align='center'>
				<td>
					<font face='Andalus' size='+2' color='blue'>Covered</font>
				</td>
				<td>
					 <input type='text' name='cd'>
				</td>
				<td>
					<font face='Andalus' size='+2' color='blue'>unit</font>
				</td>
				<td>
					 <?php
								$con=mysqli_connect('localhost','root','','rstudio');
								//mysql_select_db('rstudio');
								
								//$sql="select distinct(unitt) from entry";
								//$ds=mysql_query($sql);
								$r=mysqli_query($con, "select * from entry");
							echo"
										<select name='unn'>";
								while($row=mysqli_fetch_array($r))
								{
								echo"
											<option > $row[7]</option>";
								}		
								
								
								
							?>
				</td>
			</tr>
			<!--<tr align='center'>
				<td>
					<font face='Andalus' size='+2' color='blue'>  Photo</font>
				</td>
				<td>
					 
					 <input type='file' name='pic'>
				<td>
				</td>
			</tr>-->
			<tr align='center'>
			<td>
					<font face='Andalus' size='+2' color='blue'>Budget</font>
				</td>
				<td>
					 <?php
								$con=mysqli_connect('localhost','root','','rstudio');
								//mysql_select_db('rstudio');
								
								//$sql="select distinct(Budget) from entry";
								//$ds=mysql_query($sql);
								$r=mysqli_query($con, "select * from entry");
							echo"
										<select name='bd'>";
								while($row=mysqli_fetch_array($r))
								{
								echo"
											<option > $row[11]</option>";
								}		
								
								
								
							?>
				</td>
			</tr>
			
			<tr align='center'>
				<td>
					<font face='Andalus' size='+2' color='blue'>Message</font>
				</td>
				<td>
					
					 <input type='text' name='ms' placeholder='mention your message here' style='width:300px;height:50px'>
				</td>
			</tr>
			<tr align='center'>
			<td  colspan='4'>
				

		
			 <input type='submit' value='Submit' style= 'width:100px;height:25px; color:white;background-color:blue'></a>

					<a href='select.php'> <input type='button' value='Cancel' style= 'width:100px; height:25px; color:salmon ;background-color:black' ></a>
				</td>
								
			</tr>
						
		</table>
	
	</form>
	<tr align='center'>
						<td colspan='5'>
								<?php 
									include("footer.php");
								?>
						</td>
					</tr>
						
</body>