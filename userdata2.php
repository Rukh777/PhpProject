<?php
		$name=$_POST['nm'];
		$address=$_POST['ad'];
		$description=$_POST['des'];
		$see=$_POST['rd'];
		
		if (move_uploaded_file($_FILES["pic"]["tmp_name"],"upload/".$_FILES["pic"]["name"]))
		
		$pic=$_FILES["pic"]["name"];
		
		
		mysql_connect('localhost','root','');
		mysql_select_db('rstudio');
		
		$sql="insert into profile(name,address,description,see,photo)
					values('$name','$address','$description','$see','$pic')";
					
		//echo $sql;
		$rs=mysql_query($sql);
		/*if($rs)
			echo 'insert';
		else
			echo 'not insert';*/
				header("location:usdataview.php");
		


?>