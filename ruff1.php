<?php
		
		
		$Name=$_POST['nm'];
		$City=$_POST['ct'];
		
		mysql_connect('localhost','root','');
		mysql_select_db('db2');
		
		$sql="insert into Ruff(Name,City)
					values('$Name','$City')";
		$rs=mysql_query($sql);
		if($rs)
			echo 'insert';
		else
			echo 'not insert';


?>