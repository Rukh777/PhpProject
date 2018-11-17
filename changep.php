<?php
		$old=$_POST['old_pass'];
		$new=$_POST['new_pass'];
		$confirm=$_POST['confirm_pass'];
		
		mysql_connect('localhost',' root','');
		mysql_select_db('rstudio');
		if($new==$confirm)
		{
					$sql="update registration SET password='$new' WHERE password='$old'";
					$rs=mysql_query($sql);
					if($rs)
					echo"insert";
					else
					echo $sql;
		}
		

?>