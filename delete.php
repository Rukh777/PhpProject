	
<?php
$id=$_GET['id']	;
	mysql_connect("localhost","root","");
	mysql_select_db("frstdb");
	$sql="delete from student where  id=$id";
	
	$rs=mysql_query($sql);
if($rs)
	header("location:view.php");
	
	/*echo "deleted";
else
	echo"not";
*/
	
?>