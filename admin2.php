<?php
session_start();
  
	$name=$_POST['nn'];
	$password=$_POST['pp'];
	$_SESSION['user']=$name;
	$_SESSION['pass']=$password;
	

		$con=mysqli_connect("localhost","root","","rstudio");
		//mysql_select_db("rstudio");
		
		//$sql="select * from registration";
		//$run=mysql_query($sql);
		$r=mysqli_query($con, "select * from registration");
		
		while($row=mysqli_fetch_array($r))
		{
				$nn=$row[1];
				$pp=$row[3];
			
				if($name==$nm && $password==$ps)
					header("location:ig.php");
		}
		echo'Your username or Password is inncorrect';
	
?>