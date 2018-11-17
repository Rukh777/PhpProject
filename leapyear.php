<?php
		echo" program leap year";
		echo"<br>";	
		$a=2100;
		
		if($a%100==0)
		{
				if($a%400==0)
				{
						echo"leap year";
						
						
				
				}
				else
						echo "not leap year";
		}
		else
		{
		
				if($a%4==0)
				{
						echo"leap year";
				}
				else
				{
						echo"not leap year";
				}
		
		}
		

?>