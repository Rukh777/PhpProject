<?php
	$Id=$_POST['id']	;
	$Category=$_POST['ct']	;

	mysql_connect("localhost","root","");
	mysql_select_db("db");
	$sql="update Design set Category='$Category' where  id=$Id";
	
	$rs=mysql_query($sql);
if($rs)
{
		header("location:Catalgview.php");
}
?> 	