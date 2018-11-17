	<tr>
				<td align='center' width='10%' style='background-image:url(h3.png)';>
					<form action='photoinsert.php' method='post' enctype='multipart/form-data'>
						<table border='1' >
							<tr align='center'>
								<td colspan='2'>
									<table border='0' cellspacing='0' align='center'> 
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
															<select name='c'>";
													while($row=mysql_fetch_array($ds))
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
			<tr align='center'>
				<td>
					 Product_name:
				</td>
				<td>
					  <input type='text' name='pn'>
				</td>
			</tr>
			<tr align='center'>
				<td>
					 Price:
				</td>
				<td>
					 <input type='text' name='pr'>
				</td>
			</tr>
			<tr align='center'>
				<td>
					 Description:
				</td>
				<td>
					 <input type='text' name='ds'>
				</td>
			</tr>
			<tr align='center'>
				<td>
					 Photo:
				</td>
				<td>
					 <input type='file' name='pic'>
				</td>
			</tr>
			<tr align='center'>
				<td colspan='2'>
				     <input type='submit' value='Submit'>
					 <input type='submit' value='Cancel'>
				</td>
										
			</tr>
									
		</table>
	</form>
    </td>
	
	
	
	<td width='35%' style='background-image:url(h3.png)';>
					<form method='post' action='roarinsert.php'>
					    <table border='1' cellspacing='0' align='center' cellpadding='10'>
						    <tr>
								<td>
									<b>Category </b>
								</td>
								<td>
									<input type='text' name='ct'>
								</td>
							</tr>
							<tr align='center'>
								<td colspan='2'>
									<input type='submit' value='INSERT'>
								</td>
					
							</tr>
						</table>
					</form>
				</td>
					</tr>
						<td width=''>
						
						</td>
				