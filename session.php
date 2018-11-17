<?php
		//session start();
		
		header("content-type:image/png");
		$im=imagecreate(100,30);
		imagecolorallocate($im,112,255,212);
		$text_color=imagecolorallocate($im,43,66,122);
		$ran=rand(100,1000);
		
		$rr=md5(microtime());
		$ss=substr($rr,0,6);
		//$_SESSION["$img_values"]=$ss;
		imagestring($im,10,10,10,$ss,$text_color);
		
		imagepng($im);
		imagedestroy($im);
		



?>