
<?php
$id=$_POST['id']	;
$name=$_POST['nm']	;
$age=$_POST['ag']	;

	mysql_connect("localhost","root","");
	mysql_select_db("frstdb");
	$sql="update student set name='$name',age='$age' where  id=$id";
	
	$rs=mysql_query($sql);
if($rs)
{



	header("location:view.php");
}
?>