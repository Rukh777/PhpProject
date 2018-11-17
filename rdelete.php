	
<?php
	$id= isset($_GET['id']) ? $_GET['id'] : '';
$con=mysqli_connect('localhost','root','','rstudio');
	//$sql="delete from upload where id=$id";
	
	//$rs=mysql_query($sql);
	$r=mysqli_query($con, "select * from uploadwhere id=$id");
if($r)
	header("location:Ruploadview.php");
	
	/*echo "deleted";
else
	echo"not";
*/
	
?>