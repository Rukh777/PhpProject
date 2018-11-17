
<?php
    $id= isset($_GET['id']) ? $_GET['id'] : '';
										
	mysql_connect("localhost","root","");
	mysql_select_db("rstudio");
												
	$sql="select * from homeinsert where id='$id'";
	$rs=mysql_query($sql);
												
	if($row=mysql_fetch_array($rs));
	{
			
			$Catalog=$row[1];
													
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
		
				<font face ='Castellar' size='+2' color='ccfb5d' >id</font>
		
		</td>
		<td ><input type="text" name='id'  value=" 
			<?php
					echo $id;
			?>
			">
		</td>
	</tr>

	<tr align='center'>
		<td>
		
		<font face ='Castellar' size='+2'color='ccfb5d' >catalog</font>
		
		</td>
		<td><input type="text" name='cat'  value="  
		
			<?php echo 
			
			$Catalog;
		?>
			">
		</td>
	
	</tr>

	<tr>
		
		<td colspan="2" align="center"><input type="submit" value="update" style='color:c12267; border-radius:15px; background-color:black; width:100px;height:30px'></td>
	</tr>

	</td></tr></table>
</table>
</form>
