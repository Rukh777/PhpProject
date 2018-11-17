<?php
		
		
		$catalog=$_POST['cat'];
		
		$con=mysqli_connect('localhost','root','','rstudio');
		//mysql_select_db('rstudio');
		
		//$sql="insert into homeinsert(catalog)
					//values('$catalog')";
		//$rs=mysql_query($sql);
		$r=mysqli_query($con, "insert into homeinsert(catalog)values('$catalog')");
		/*if($rs)
		
			
			<!--echo 'insert';
		else
			echo 'not insert';*/
header("location:Rview.php");

?>
