<?php
	$id=$_POST['id'];
	$Catalog=$_POST['cat'];
	$Collection=$_POST['col'];
	$Description=$_POST['ds'];
	$Price=$_POST['pr'];
	
	if (move_uploaded_file($_FILES["pic"]["tmp_name"],"upload/".$_FILES["pic"]["name"]))
		
		$pic=$_FILES["pic"]["name"];
	
	$con=mysqli_connect('localhost','root','','rstudio');
	
	//$sql="update upload set Catalog='$Catalog', Collection='$Collection', 
	//Description='$Description', Price='$Price', Photo='$pic' where id=$id";
	//$rs=mysqli_query($sql);
	
	
	$r=mysqli_query($con, "update upload set Catalog='$Catalog', Collection='$Collection', 
	Description='$Description', Price='$Price', Photo='$pic' where id=$id");
	if($r)
		header("location:Ruploadview.php");
?>