<?php
		$name=$_POST['nm'];
		$address=$_POST['ad'];
		
		if (move_uploaded_file($_FILES["pic"]["tmp_name"],"upload/".$_FILES["pic"]["name"]))
		
		$pic=$_FILES["pic"]["name"];
		
		$description=$_POST['des'];
		$service=$_POST['sp'];
		$contact=$_POST['co'];
		$awards=$_POST['cr'];
		$projects=$_POST['pr'];
		$reviews=$_POST['rw'];
		
		
		
		mysql_connect('localhost','root','');
		mysql_select_db('rstudio');
		
		$sql="insert into pros(name,address,photo,description,service,contact,awards,projects,reviews)
					values('$name','$address','$pic','$description','$service','$contact','$awards','$projects','$reviews')";
					
		//echo $sql;
		$rs=mysql_query($sql);
		/*if($rs)
			echo 'insert';
		else
			echo 'not insert';*/
				header("location:prosview.php");
		


?>