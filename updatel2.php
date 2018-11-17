<?php
	$id=$_POST['id'];
	$study=$_POST['st'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("db");
	
	$sql="update learn set study='$study' where id=$id";
	$run=mysql_query($sql);
	
	if($run)
		header("location:lview.php");
?>