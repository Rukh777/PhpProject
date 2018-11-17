
									<?php
										$id=$_GET['id'];
										
										$con=mysqli_connect("localhost","root","","rstudio");
										//mysql_select_db("rstudio");
										
										//$sql="select * from homeinsert where id='$id'";
										//$run=mysql_query($sql);
										$r=mysqli_query($con, "delete from homeinsert where id=$id");
										
										while($row=mysqli_fetch_array($r))
										{
											$id=$row[0];
											$catalog=$row[1];
											
										}
									?>


<head>
	<style>
		table{
			background:-webkit-linear-gradient(#461b7e,#c25a7c);
			
		}
	</style>
</head>

<body style='background-image:url(kit10.jpg); background-image:repeat-no ;background-size:1560px 800px; margin:20px'>
<form method="post" action="catupdate.php">
<caption><font face ='Castellar' size='+3' color='ccfb5d'>update info***</caption></font>
<table border='1' bgcolor='black' height='50' width='100%'  cellpadding='6' cellspacing='0';>
	<tr width='100%'><td width='100%'>
<table width='100%' border='0' align='center'  cellpadding='8' cellspacing='0'>
	<tr align='center'>
		<td >
		
				<font face ='Castellar' size='+2' color='ccfb5d' >Id</font>
		
		</td>
		<td>
				<input type='text' name='id' value='<?php 
						echo $row[0];
				?>'>
		</td>
	</tr>
	<tr align='center'>	
		<td>
				
				<font face ='Castellar' size='+2'color='ccfb5d' >Catalog
		</td>
		<td>
				<input type='text' name='st' value='<?php 
						echo $row[1];
				?>'>														
		</td>
	</tr>
	<tr>
		
		<td colspan="2" align="center"><input type="submit" value="update" style='color:c12267; border-radius:15px; background-color:black; width:100px;height:30px'></td>
	</tr>

	</td></tr></table>
</table>
</form>

												
