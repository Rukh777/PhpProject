	
<?php
$id=$_GET['id']	;
	mysql_connect("localhost","root","");
	mysql_select_db("db");
	$sql="delete from Design where id=$id";
	
	$rs=mysql_query($sql);
if($rs)
	header("location:Catalgview.php");
	
	/*echo "deleted";
else
	echo"not";
*/
	
?>