<?php
		$Catalog=$_POST['cat'];
		$Collection=$_POST['col'];
		$Price=$_POST['pr'];
		$Description=$_POST['ds'];
		
		if (move_uploaded_file($_FILES["pic"]["tmp_name"],"upload/".$_FILES["pic"]["name"]))
		
		$pic=$_FILES["pic"]["name"];
		
		
		$con=mysqli_connect('localhost','root','','rstudio');
		
		$sql="insert into upload(Catalog,Collection,Description,Price,Photo)
					values('$Catalog','$Collection','$Description','$Price','$pic','$con')";
					
		//echo $sql;
		$rs=mysqli_query($sql);
		/*if($rs)
			echo 'insert';
		else
			echo 'not insert';*/
				header("location:Ruploadview.php");
		


?>