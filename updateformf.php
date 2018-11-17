
<?php
$id=$_POST['id']	;
$first_name=$_POST['fn']	;
$last_name=$_POST['ln']	;
$Address=$_POST['ad']	;
$Date_of_birth=$_POST['dob']	;
$email=$_POST['em']	;
$city=$_POST['ct']	;


	mysql_connect("localhost","root","");
	mysql_select_db("db1");
	$sql="update form set first_name='$first_name',last_name='$last_name', Address='$Address' ,  Date_of_birth='$Date_of_birth', email='$email', city='$city' where  id=$id";
	
	$rs=mysql_query($sql);
if($rs)
{



	header("location:viewform.php");
}
?>