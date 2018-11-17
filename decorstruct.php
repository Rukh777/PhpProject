<html>
<head>
	<style>
	
		input[type=text] {
								width: 100%;
								height:30px;
								padding: 10px 20px;
								margin: 8px 0;
								box-sizing: border-box;
								border: 0px solid red;
								border-radius: 3px;
						}
							input[type=password] {
								width: 100%;
								padding: 10px 20px;
								margin: 8px 0;
								box-sizing: border-box;
								border: 0px solid red;
								border-radius: 3px;
`						}
				
	</style>
</head>

	<body >
			<table width='100%' align='center' border='0'  >
					<tr align='center'>
						<td colspan='5'>
								<?php 
									include("decor.php");
								?>
						</td>
					</tr>
					<form action='admin2.php' method='post'>
					<tr align='center'>
						<td  height='100' class='textarea'>
							
							<table align='center' width='30%' height='50' border='1' bordercolor='' cellpadding='10' cellspacing='0' >
							<tr align='center'>
							<td width='10%' class='a'>
									<img src='user.jpg' height='40' width='100'>
							</td> 
							<td width='90%'>
								<input type='text' name='nm' placeholder='Username'>
							</td>
						</tr>
						<tr align='center'>
								<td width='10%' class='a'>
										<img src='lock.jpg'  height='40' width='100'>
								</td> 
								<td  width='90%'>
									<input type='Password' name='ps' placeholder='Password'>

								</td>
							</tr>
						<tr align='center'>
								<td colspan='2' height='50' bgcolor='black' >
									<input type='submit' value='SIGN IN' style='height:30px;width:100px;font-size:20px'>
								</td>
						</tr>

				</table>
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