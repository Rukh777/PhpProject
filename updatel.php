
<style>
	#a1{
		color:white;
		font-size:+20;
		padding-right:10;
		padding-left:10;
		
	}
</style>
<table width='80%' style='border-style:outset;border-width:4' align='center'>
	<tr align='center'>
		<td>
			<table align='center' cellspacing='0' width='100%'>
				<tr>
					<td colspan='3' width='100%'>
						<?php
						include("head1.php");
						?>
					</td>
				</tr>
				<tr align='center'>
					<td>
						<table width='100%' bgcolor='black'>
							<tr align='center'>
								<td>
									<img align='left' src='1.jpg' height='50%' width='40%'>
								</td>
							</tr>
			

							<tr align='center'>
							
								<td>
									
									<?php
										$id=$_GET['id'];
										
										mysql_connect("localhost","root","");
										mysql_select_db("db");
										
										$sql="select * from learn where id=$id";
										$run=mysql_query($sql);
										
										if($row=mysql_fetch_array($run))
										{
											$id=$row[0];
											$study=$row[1];
											
										}
									?>
									<form method='post' action='updatel2.php'>
										<table align='center' border='2' cellspacing='0' cellpadding='10'>
											<tr align='center'>
												<td colspan='2'><font color='white' size='+1'>Update your choice..</td>
											</tr>
											<tr align='center'>
												<td>
													<font color='white' size='+1'>Id
												</td>
												<td>
													<input type='text' name='id' value='<?php 
													echo $row[0];
													?>'>
												</td>
											</tr>
											<tr align='center'>
												<td>
													<font color='white' size='+1'>Change Collection Name
												</td>
												<td>
													<input type='text' name='st' value='<?php 
													echo $row[1];
													?>'>														
												</td>
											</tr>
											<tr align='center'>
												<td colspan='2'>
													<input type='submit' value='Update'>				
												</td>
											</tr>
										</table>
									</form>
									
								</td>
							
							</tr>
							
							
							<tr>
								<td>
									<img src='1.jpg' align='right' height='50%' width='40%'>
								</td>
							</tr>
						</table>
					</td>		
				</tr>
				<tr>
					<td colspan='3' width='100%'>
						<?php
							include("foot1.php");
						?>
						</td>
				</tr>
			</table>
			
		</td>
	</tr>
</table>