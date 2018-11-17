	

<html>
	<form action='uplod3.php' method='post' enctype='multipart/form-data'>
		<?php
	
		$n=$_POST['no'];
			
			echo"No entered";
			
			echo"<input type='text' value=$n name='y'>";
		?>
		<table  align='center'>
	
			<?php
				for($i=1; $i<=$n; $i++)
				{
			?>	
					<html>
						
					<tr>
						<td>
							PHOTO
						</td>	
						<td>
						<?php
							echo"<input type='file' name=$i>";
						?>
							
						</td>
					</tr>
					</html>					
				<?php
				}
				?>
			<tr align='center'>
				<td colspan='2'>
					<input type='submit' value='submit'>
				</td>
			</tr>
		
		</table>
	</form>
</html>

	
	
	
