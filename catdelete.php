	
<?php
	$id=$_GET['id'];
	$con=mysqli_connect("localhost","root","","rstudio");
	//mysql_select_db("rstudio");
	//$sql="delete from homeinsert where id=$id";
	
	//$rs=mysql_query($sql);
	$r=mysqli_query($con, "delete from homeinsert where id=$id");
if($r)
	header("location:Rview.php");
	
	/*echo "deleted";
else
	echo"not";
*/
	
?>