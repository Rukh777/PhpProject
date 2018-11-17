<?php
	for($i=1;$i<=3;$i++)
	{	
		$r=move_uploaded_file($_FILES["$i"]["tmp_name"],"upload/".$_FILES["$i"]["name"]);
		if($r)
		{
			$a=$_FILES["$i"]["name"];
//echo $a;
			echo "<image src='upload/$a' height='100' width='100' >";
			echo "uploaded";
		}
		else
		{
			echo"not uploaded";
		}
	}
?>