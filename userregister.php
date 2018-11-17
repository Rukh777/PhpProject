<?php

        session_start();
		$con=mysqli_connect('localhost','root','','rstudio');
		
		if(isset($_POST["register_btn"]))
         {
			 $usernamesignup= mysql_real_escape_string($_POST["usernamesignup"]);
             $emailsignup= mysql_real_escape_string($_POST["emailsignup"]);
             $passwordsignup= mysql_real_escape_string($_POST["passwordsignup"]); 
             $passwordsignup_confirm= mysql_real_escape_string($_POST["passwordsignup_confirm"]);
			 
			 
			 if ( $password == $password2 ){

          $password = md5($password);
		  
		  $r=mysqli_query($con, "insert into registration ( name, email, password) values ('$usernamesignup', '$emailsignup', '$passwordsignup' ");
		  
		  if($row=mysqli_fetch_array($r))
		  {
			  $_SESSION['message']="You are Logged in Successfully";
			   $_SESSION['usernamesignup']=$usernamesignup;
			  
			
			  
			  	header("location:log1.php");
		  }
		  else{
		  
		   $_SESSION ['message']="password did not match";
		  }
		  
		}


?>
		
