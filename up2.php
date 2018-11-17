
<?php
$id=$_POST['id']	;
$Name=$_POST['nm']	;
$Age=$_POST['ag']	;

	mysql_connect("localhost","root","");
	mysql_select_db("firstdb");
	$sql="update Up set Name='$name',Age='$age' where Id=$id";
	
	$rs=mysql_query($sql);
if($rs)
{
		header("location:upview.php");
}
?>