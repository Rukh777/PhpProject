<?php
		
		
		$Category=$_POST['ct'];
		
		mysql_connect('localhost','root','');
		mysql_select_db('db');
		
		$sql="insert into Design(Category)
					values('$Category')";
		$rs=mysql_query($sql);
		if($rs)
			echo 'insert';
		else
			echo 'not insert';


?>