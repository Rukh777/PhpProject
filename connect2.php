<?php

		$first_name=$_POST['fn'];
		$last_name=$_POST['ln'];
		$dob=$_POST['dob'];
		$address=$_POST['ad'];
		$email=$_POST['em'];
		$city=$_POST['ct'];
		
		mysql_connect('localhost','root','');
	mysql_select_db('db1');
	
	$sql="insert into form(First_name,Last_name,Address,Date_of_Birth,city,email)
			values('$first_name','$last_name','$address','$dob','$email','$city')";
	$rs=mysql_query($sql);
	if($rs)
		echo 'insert';
	else
		echo 'not insert';
	
		

		


?>