<?php
$id=$_GET['id']	;
	mysql_connect("localhost","root","");
	mysql_select_db("frstdb");
	$sql="select * from student where  id=$id";
	
	$rs=mysql_query($sql);
	
	
	
	
	if($row=mysql_fetch_array($rs))
	{
		$name=$row[1];
		$age=$row[2];
	
	
	}
?>
<form method="post" action="update1.php">
<table >
	<tr>
		<td>id</td>
		<td><input type="text" name ='id'value="
		<?php
			echo $id;
		?>
		">
	</tr>

	<tr>
		<td>Name</td>
		<td><input type="text" name='nm' value="
		<?php
			echo $name;
		?>
		">
	</tr>
	<tr>
		<td>age</td>
		<td><input type="text" name='ag'value="
		<?php
			echo $age;
		?>
		">
	</tr>
	<tr>
		
		<td colspan="2" align="center"><input type="submit" value="Update">
	</tr>


</table>
</form>
