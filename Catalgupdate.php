<?php
    $Id=$_GET['id']	;
	mysql_connect("localhost","root","");
	mysql_select_db("db");
	$sql="select * from Design where  id=$Id";
	
	$rs=mysql_query($sql);
	
	
	
	
	if($row=mysql_fetch_array($rs))
	{
		
		$Category=$row[1];
	
	
	}
?>
<form method="post" action="Catalgup2.php">
<table width='70%' border='1' align='center' cellpadding='10'>
	<tr align='center'>
		<td>Id</td>
		<td><input type="text" name ='id'  value="   <?php echo $Id;
		
		
	     ?>
		">
		</td>
	</tr>

	<tr align='center'>
		<td>Category</td>
		<td><input type="text" name='ct'   value="    <?php echo $Category;
		
		
		
		?>
		">
		</td>
	
	</tr>

	<tr>
		
		<td colspan="2" align="center"><input type="submit" value="update"></td>
	</tr>


</table>
</form>
