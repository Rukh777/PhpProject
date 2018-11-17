<table width='90%' align='center' border='0' cellpadding='8'>
	<tr>
		<td  colspan='3'>
				<?php
					include('start.php');
				?>
		</td>
		
	</tr>
	<tr>
		<td width='20%' bgcolor='#F5DEB3'>
			<?php
					include('middle.php');
				?>
		</td>
		<td width='45%' style='background:-webkit-linear-gradient(blue,cyan)'>
			<table border='0' align='center' cellspacing='0' cellpadding='15'>
				<tr>
					<td>
						<b>Username</b>
						<input type='text'>
					</td>
					
					<td>
						<b>Password</b>
						<input type='password'>
					</td>
					
				</tr>
				<tr>
					<td align='center'>
						<input type='button' value='LOGIN'>
					</td>
					<td>
						<input type='button' value='SIGN UP'>
					</td>
				</tr>
			</table>
			
		</td>
		<td width='35%'>
		<form method='post' action='roarinsert.php'>
			<table border='1' cellspacing='0' align='center' cellpadding='10'>
				<tr>
					<td>
						<b>Category </b>
					</td>
					<td>
						<input type='text' name='cat'>
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
		<td width='100%' colspan='3' >
				<?php
					include('end.php');
				?>
		</td>
		
	</tr>
</table>