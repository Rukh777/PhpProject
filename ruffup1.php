
<?php
$id=$_POST['id']	;
$Name=$_POST['nm']	;
$City=$_POST['ct']	;

	mysql_connect("localhost","root","");
	mysql_select_db("db2");
	$sql="update Ruff set Name='$Name',City='$City' where Id=$id";
	
	$rs=mysql_query($sql);
if($rs)
{
		header("location:ruffview.php");
}
?>