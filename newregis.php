<html>
		<body>
				<form action='newregis1.php' method='post'>
				<table border='6' width='50%' align='center' cellspacing='0' cellpadding='10' bordercolor='cyan'>
				<tr align='center'>
					<td colspan='2'> <h1>Registration Form</h1></td>
				</tr>
				<tr align='center'>
					<td>
							First Name
					</td>
					<td>
							<input type='text' name='nm'>
							
					</td>
				</tr>
				<tr align='center'>
					<td>
							Middle Name
					</td>
					<td>
							<input type='text' name='mn'>
							
					</td>
				</tr>
				<tr align='center'>
					<td>
							Last Name
					</td>
					<td>
							<input type='text' name='ln'>
							
					</td>
				</tr>
				<tr align='center'>
					<td>
							Date of Birth
					</td>
					<td>
							<input type='text' name='db'>
							
					</td>
				</tr>
				<tr align='center'>
					<td>
							Gender
					</td>
					<td>
							Male<input type='radio' name='gr' value='male'>
							Female<input type='radio' name='gr' value='female'>
							
					</td>
				</tr>
				<tr align='center'>
					<td>city</td>
					<td><select name='city'>
									<optgroup label='Rajasthan'>
											
													<option value='sikar'>sikar</option>
													<option value='udaipur'>Udaipur</option>
													<option value='jaipur'>jaipur</option>
									</optgroup>
									<optgroup label='Maharashtra'>
											
													<option value='noida'>Noida</option>
													<option value='mumbai'>Mumbai</option>
													<option value='pune'>Pune</option>
									</optgroup>
		
		

					</select></td>
				</tr>
				<tr align='center'>
					<td>
							Hobbies
					</td>
					<td>
					
								Sports<input type='checkbox' value='Sports' name='sp'>
								Dance<input type='checkbox' value='Dance' name='dc'>
								Music<input type='checkbox' value='Music' name='mu'>
								Football<input type='checkbox' value='Football' name='fl'>
					</td>
				</tr>
				<tr align='center'>
					<td>
							Email
					</td>
					<td>
						<input type ="email" name='em'>
					</td>
				</tr>
				<tr align='center'>
					<td colspan='2'><input type='submit' name='sb'></td>
				</tr>
		</body>
</html>