<?php
		$Category=$_POST['c'];
		$Product_name=$_POST['pn'];
		$Price=$_POST['pr'];
		$Description=$_POST['ds'];
		
		if (move_uploaded_file($_FILES["pic"]["tmp_name"],"upload/".$_FILES["pic"]["name"]))
		
		$pic=$_FILES["pic"]["name"];
		
		
		mysql_connect('localhost','root','');
		mysql_select_db('db');
		
		$sql="insert into Product1(Category,Product_name,Price,Description,Photo)
					values('$Category','$Product_name','$Price','$Description','$pic')";
					
		echo $sql;
		$rs=mysql_query($sql);
		if($rs)
			echo 'insert';
		else
			echo 'not insert';
		
		


?>