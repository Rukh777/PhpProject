
<html>
	<body>
			<table width='100%' align='center' border='0' >
					<tr align='center'>
						<td colspan='5'>
								<?php 
									include("decor.php");
								?>
						</td>
					</tr>
					
		
						
				
					
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
					
					<tr align='center'>
						<td colspan='5'>
								<?php 
									include("decorfoot.php");
								?>
						</td>
					</tr>
				</table>
	</body>
</html>