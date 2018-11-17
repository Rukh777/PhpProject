<?php
		
		$id=$_GET['id'];
		mysql_connect('localhost','root','');
		mysql_select_db("db2");
		$sql="select * from Ruff where id=$id";

		
		$rs=mysql_query($sql);
	
		if($row=mysql_fetch_array($rs))
		{
				$Name=$row[1];
				$City=$row[2];
	
	
		}
?>

<form method="post" action="ruffup1.php">
<table border='5' bordercolor='orange' width='50%' align='center' cellpadding='20' cellspacing='0' >
	<tr align='center'>
		<td>Id</td>
		<td><input type="text" name ='id' value="
		<?php
			echo $id;
		?>
		">
		
		
	</tr>

	<tr  align='center'>
		<td>Name</td>
		<td><input type="text" name='nm' value="<?php  	echo $Name;
		?>
		">
		
	</tr>
	<tr  align='center'>
		<td>City</td>
		<td><input type="text" name='ct'value="
		<?php
			echo $City;
			
		?>
		">
			</td>
	</tr>
	<tr>
		
		<td colspan="2" align="center"><input type="submit" value="Update"></td>
	</tr>


</table>
</form>



