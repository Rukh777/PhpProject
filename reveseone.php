<?php
		echo "<table border='1' width='80%' cellspacing='4'>";
		echo"<tr>";
		for($i=5; $i>=1; $i--)
		{
			for($j=1; $j<=$i; $j++)
			{
					echo"<td>";
					echo $j;
					echo"</td>";
					
					
			}
			echo"</tr>";
		}
?>