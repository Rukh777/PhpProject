<?php
	
		$name=$_POST['nm'];
		$age=$_POST['ag'];
		
		if (move_uploaded_file($_FILES["pic"]["tmp_name"],"upload/".$_FILES["pic"]["name"]))
		
		$pic=$_FILES["pic"]["name"];
		
		
		mysql_connect('localhost','root','');
		mysql_select_db('firstdb');
		
		$sql="insert into Up(Name,Age,Photo)
					values('$name','$age','$pic')";
		$rs=mysql_query($sql);
		if($rs)
			echo 'insert';
		else
			echo 'not insert';
		
		


?>