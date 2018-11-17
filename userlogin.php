<?php
session_start();

	$name=$_POST['nm'];
	$password=$_POST['ps'];
	$email=$_POST['em'];
	
	$_SESSION['user']=$name;
	$_SESSION['pass']=$password;
	

		mysql_connect("localhost","root","");
		mysql_select_db("rstudio");
		
		$sql="select * from registration";
		$run=mysql_query($sql);
		
		while($row=mysql_fetch_array($run))
		{
				$nm=$row[1];
				$ps=$row[3];
				$em=$row[2];
				if($name==$nm && $email==$em && $password==$ps)
				{
						header("location:decoruser.php");
				}
				else
				{
					$_SESSION['err']="UnSuccessfully";
					header("location:userlogin1.php");
				}
		}
		//echo'Your username or Password is inncorrect';
	
?>