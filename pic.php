<?php
	$r=move_uploaded_file($_FILES["m"]["tmp_name"],"upload/".$_FILES["m"]["name"]);
	if($r)
	{
		$a=$_FILES["m"]["name"];
		echo $a;
		echo"<img src='upload/$a' height='100' width='100'>";
		echo"uploaded";
	}
	else
	{
		echo"not uploaded";
	}
?>