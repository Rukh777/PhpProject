<?php
		
		
		$name=$_POST['ch'];
		
		mysql_connect('localhost','root','');
		mysql_select_db('rstudio');
		
		$sql="insert into proname(name)
					values('$name')";
		$rs=mysql_query($sql);
		if($rs)
		
			header("location:proview.php");
			/*<!--echo 'insert';
		else
			echo 'not insert';*/


?>
