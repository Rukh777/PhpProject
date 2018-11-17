<?php
		$name=$_POST['ch'];
		$space=$_POST['sp'];
		$loc=$_POST['sl'];
		$state=$_POST['st'];
		$city=$_POST['ct'];
		$area=$_POST['ar'];
		$unit=$_POST['un'];
		$covered=$_POST['cd'];
		$unit=$_POST['unn'];
		$budget=$_POST['bd'];
		$message=$_POST['ms'];
		
		if (move_uploaded_file($_FILES["pic"]["tmp_name"],"upload/".$_FILES["pic"]["name"]))
		
		$pic=$_FILES["pic"]["name"];
		
		
		mysql_connect('localhost','root','');
		mysql_select_db('rstudio');
		
		$sql="insert into entry(designer,style,type,state,city,area,unit,covered,unitt,photo,budget,message)
					values('$name','$space','$loc','$state','$city','$area','$unit','$covered','$unit','$pic','$budget', '$message')";
					
		echo $sql;
		$rs=mysql_query($sql);
		if($rs)
			/*echo 'insert';
		else
			echo 'not insert';*/
			header("location:entryview.php");
				
		


?>