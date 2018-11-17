<?php
	$name=$_POST["n"];
	$age=$_POST["a"];
	
	mysql_connect("localhost","root","");
	mysql_select_db("frstdb");
	$sql="insert into student(name,age)values('$name','$age')";
	$rs=mysql_query($sql);
	if($rs)
		echo"insert";
	else
		echo"not insert";
?>