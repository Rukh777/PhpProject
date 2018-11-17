<?php
	$id=$_POST['id'];
	$catalog=$_POST['st'];
	
	$con=mysqli_connect("localhost","root","","rstudio");
	//mysql_select_db("rstudio");
	
	//$sql="update homeinsert set catalog='$catalog' where id='$id'";
	//$rs=mysql_query($sql);
	$r=mysqli_query($con, "update homeinsert set catalog='$catalog' where id='$id'");
	if($r)
		header("location:Rview.php");
?>
