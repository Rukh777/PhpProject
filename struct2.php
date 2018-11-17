<html>
	<body bgcolor='grey'>
			<table width='100%' align='center' border='2' style='border-radius:50px'; >
					<tr align='center'>
						<td colspan='2'>
								<?php 
									include("head2.php");
								?>
						</td>
					</tr>
					<tr>
						<td align='center' width='10%'>
								<?php 
									include("left2.php");
								?>
						</td>
						<td width='90%'>
						
						
						
								<form action="pic.php" method="post" enctype="multipart/form-data">
									<table>
										<tr>
											<td>
												Photo:
											</td>
											<td>
												<input type="file" name="m">
											</td>
										</tr>
										<tr>
											<td>
												<input type="submit" value="send">
											</td>
										</tr>
									</table>
								</form>
								
								
								
								
								
						</td>
					</tr>
					<tr align='center'>
						<td colspan='4'>
								<?php 
									include("foot2.php");
								?>
						</td>
					</tr>
			</table>
	</body>
</html>
