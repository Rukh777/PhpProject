	<head>
		<title>designer's profile</title>

	<style>
		.rectangle{
	  display:relative;
	  height:300px;
	  width:450px;
	  
	  background:#fde3a7;
	  position:relative;
	  margin-top:60px;
	  background-position: 50%;
	  border-radius: 10px;
	  border-color:blue;
	  margin-left:3%;
	   background: rgba(255,250,250,.5);
	}

	.circle{
	 
		width: 150px;
		height: 150px;
		position: absolute;
		overflow: hidden;
		border-radius: 50%;
		top:-80px;
		left:30%;
	}

	img {
		display: inline;
		margin: 0 auto;
		height: 100%;
		width: 100%;

	}
	.ab{
			margin:100px;
			top:-100px;
			position:relative;
			text-align:center;
			background: rgba(215,255,210,.5);
			height:100;
			width:100%;
			font-size:70px;
			border-radius:50px;
			
		}
		




		</style>
	</head>


<body style='background-image: url(bed2.jpg); background-repeat:no-repeat; background-size:2000px 1700px;'>
    	
	<div  class='ab' style='color:white;width:1600px;margin:100px;top:-10px'>Designer's Profile</div>
		
		<?php
								$con=mysqli_connect('localhost','root','','rstudio');
								//mysql_select_db('rstudio');
								
								//$sql="select * from profile";
								//$ds=mysql_query($sql);
						       $r=mysqli_query($con, "select * from profile");
					$count=1;					
								while($row=mysqli_fetch_array($r))
								{
								
								 $p=$row[5];
								 $name=$row[1];
								 $address=$row[2];
								 $description=$row[3];
								 $see=$row[4];
							 
						
echo"<div class='rectangle' style='float:left;margin:70px';><p style='text-align:center;position:absolute;bottom:100px;margin:80;left:50px;color:e4287c;font-size:30px;font-weight:bold'>$name</p>
			<p style='text-align:center;position:absolute;bottom:50px;margin:80;left:40px;color:blue;font-size:20px;font-weight:20px'>$address</p>
			<p style='text-align:center;position:absolute;bottom:-30px;margin:80;width:350px;left:-20px;color:green;font-size:20px;font-weight:bold'>$description</p>
			<a href='prof.php?name=$name' style='position:absolute;color:brown;bottom:20px;left:270;font-size:25px;font-weight:20px'>$see</a>
					
			<div class='circle'>
					<img src='$p' class='rounded' />
				</div>		</div>";
				
							
			if (($count==3)||($count==6)||($count==9))
			echo"<div></div>";
			
			$count++;
			}					
							
?>

	</body>
