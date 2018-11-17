<?php
	$study=$_POST['st'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("db");
	
	$sql="insert into learn(study) values ('$study')";
	$run=mysql_query($sql);
	
	if($run)
		header("location:lview.php");
?>