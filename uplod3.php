<?php
	$y=$_POST['y'];
	for($i=1;$i<=$y; $i++)
	{
		$r=move_uploaded_file($_FILES["$i"]["tmp_name"],"upload/".$_FILES["$i"]["name"]);
		if($r)
		{
			$a=$_FILES["$i"]["name"];
			//echo $a;
			echo "<image src='upload/$a' height='100' width='100'>";
			echo"uploaded";
			echo"<br>";
			echo"<br>";
		}
		else
		{
			echo"Not uploaded";
		}
	}
?>