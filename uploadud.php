<head>
	<style>
		td{
				color:white;
				font-size:20px;
				font-weight:bold;
					border-radius:150px;
				
		}
		table{
				border-radius:150px;
		}
		
	</style>
</head>
<?php
   /* $id= isset($_GET['id']) ? $_GET['id'] : '';*/
	$id=$_GET['id'];									
	$con=mysqli_connect("localhost","root","","rstudio");
//mysql_select_db("rstudio");
												
	//$sql="select * from upload where id='$id'";
	//$rs=mysql_query($sql);
	$r=mysqli_query($con, "select * from upload where id='$id'");
												
	while($row=mysqli_fetch_array($r));
	{
			$id=$row[0];
			$Catalog=$row[1];
			$Collection=$row[2];
			$Description=$row[3];
			$Price=$row[4];
			$pic=$row[5];
													
												}
?>
<body style='background-image:url(green1.jpg); background-image:repeat-no ;background-size:1600px 800px; margin:20px'>
<form method="post" action="uploadud1.php" enctype='multipart/form-data'>
<table width='70%' border='1' align='center' cellpadding='10' cellspacing='0' bgcolor='black'>
<tr><td>
<table width='70%' border='0' align='center' cellpadding='10' cellspacing='0' bgcolor='black'>

	<tr align='center'>
		<td>Id</td>
		<td><input type="text" name='id'  value='
			<?php
					echo $row[0];
			?>'>
		</td>
	</tr>

	<tr align='center'>
		<td>Catalog</td>
		<td>
			<input type='text' name='cat' value='<?php 
						echo $row[1];
				?>'>
		</td>
	
	</tr>
	<tr align='center'>
		<td>Collection</td>
		<td><input type='text' name='col' value='<?php 
						echo $row[2];
				?>'>
		</td>
	
	</tr>
	<!--<tr align='center'>
		<td>Description</td>
		<td>
				<input type='text' name='ds' value='<?php 
						echo $row[3];
				?>'>
		</td>
	
	</tr>
	<tr align='center'>
		<td>Price</td>
		<td>
			<input type='text' name='pr' value='<?php 
						echo $row[4];
				?>'>
		</td>
	</tr>-->
	<tr align='center'>
		<td>Photo</td>
		<td>
			<input type='file' name='pic' value='<?php 
						echo $row[5];
				?>'>
		</td>
	
	</tr>
	<tr>
		
		<td colspan="2" align="center"><input type="submit" value="update"></td>
	</tr>

</tr></td></table>
</table>
</form>
</body>