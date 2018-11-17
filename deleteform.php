	
<?php
$id=$_GET['id']	;
	mysql_connect("localhost","root","");
	mysql_select_db("db1");
	$sql="delete from form where id=$id";
	
	$rs=mysql_query($sql);
if($rs)
	header("location:viewform.php");
	
	/*echo "deleted";
else
	echo"not";
*/
	
?>