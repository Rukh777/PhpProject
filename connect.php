<?php
	
	$name=$_POST['nm'];
	$age=$_POST['ag'];
	
	mysql_connect('localhost','root','');
	mysql_select_db('db');
	
	$sql="insert into student (name,age)
			values('$name','$age')";
	$rs=mysql_query($sql);
	if($rs)
		echo 'insert';
	else
		echo 'not insert';
	

?>
