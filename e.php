<?php
		//session start();
		
		
		$ran=rand(100,1000);
		echo md5($ran);
		$rr=md5($ran);
		$ss=substr($rr,10,6);
		
		echo"<br>";
		
		echo $ss;
		


?>