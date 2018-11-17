<?php
session_start();
		$username=$_POST['n'];
		
		
		$designer=$_POST['ch'];
		$style=$_POST['sp'];
		$ty=$_POST['sl'];
		$state=$_POST['st'];
		$city=$_POST['ct'];
		$area=$_POST['ar'];
		$unit=$_POST['un'];
		$co=$_POST['cd'];
		$unitt=$_POST['unn'];
		$budget=$_POST['bd'];
		$message=$_POST['ms'];
		
		if (move_uploaded_file($_FILES["pic"]["tmp_name"],"upload/".$_FILES["pic"]["name"]))
		
		$pic=$_FILES["pic"]["name"];
		
		
		$con=mysqli_connect('localhost','root','','rstudio');
		//mysql_select_db('rstudio');
		
		$sql="insert into userinsert(designer,style,type,state,city,area,unit,covered,unitt,photo,budget,message,username)
					values('$designer','$style','$ty','$state','$city','$area','$unit','$co','$unitt','$pic','$budget','$message','$username')";
					
		//echo $sql;
		$rs=mysqli_query($sql);
		/*if($rs)
			echo 'insert';
		else
			echo 'not insert';*/
				/*header("location:selectview.php");*/
		
			header("location:thank.php")

?>