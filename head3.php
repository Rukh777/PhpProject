<html>
	
		<body>
				<table border='0' width='100%' cellspacing='0' align='center' bordercolor=''> 
					<tr align='center'>
						<td width='30%' colspan='1'>
						
								<img src='h4.png' height='200' width='100%'>
						</td>
						
						<td width='70%' colspan='3' >
								<img src='lv3.jpg' height='200' width='100%'>
								
						</td>
						
					</tr>
					<tr align='center'>
					
						<td bgcolor="black" ><a href ="h2.php" style= 'text-decoration:none; color:white'>HOME DECORATION</a></td>
						
						<td bgcolor="black" ><a href ="h2.php" style= 'text-decoration:none; color:white'>RESTAURANT</a></td>
						
						<td bgcolor="black" ><a href ="h2.php" style= 'text-decoration:none; color:white'>HOSPITALS</a></td>
						
						<td bgcolor="black"><a href ="h2.php" style= 'text-decoration:none; color:white'>SHOWROOMS</a></td>
					</tr>
					<tr align='center'>
						<td colspan='4'>
						
	<head>
	<script>
		var image1=new Image();
		image1.src='lv1.jpg';
		
		var image2=new Image();
		image2.src='golden.jpg';
		
		var image3=new Image();
		image3.src='wood sofa.jpg';
		
		var image4=new Image();
		image4.src='big.jpg';
		
		var image5=new Image();
		image5.src='green.jpg';
		
		var image6=new Image();
		image6.src='chair.jpg';
		
		var image7=new Image();
		image7.src='green sofa.jpg';
		
		var image8=new Image();
		image8.src='light des.jpg';
		
		var image9=new Image();
		image9.src='white sofa.jpg';
		
		var image10=new Image();
		image10.src='bath.jpg';
		
		
		
	</script>
</head>

<body>
	<center>
		<image src='bar.jpg' name='slide' height='250' width='1000'>
	</center>
	
	<script>
		var step=1;
		function slideit()
		{
			if(!document)
			return false;
			
			else
			document.images.slide.src=eval("image"+step+".src");
			
			if(step<10)
			{
				step++;
			}
			else
			step=1;
			setTimeout("slideit()",2000);
		}
		slideit();
	</script>
</body>
						</td>
					
					</tr>
				
				</table>
		
		</body>

</html>