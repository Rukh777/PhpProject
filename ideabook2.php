<?php
		
		$collection=$_POST['col'];
		
		if (move_uploaded_file($_FILES["pic"]["tmp_name"],"upload/".$_FILES["pic"]["name"]))
		
		$pic=$_FILES["pic"]["name"];
		
		
		mysql_connect('localhost','root','');
		mysql_select_db('rstudio');
		
		$sql="insert into idaebook(photo,collection)
					values('$pic','$collection')";
					
		//echo $sql;
		$rs=mysql_query($sql);
		/*if($rs)
			echo 'insert';
		else
			echo 'not insert';*/
				header("location:ideaview.php");
		


?>