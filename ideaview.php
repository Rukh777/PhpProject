
<head>
	<style>

.intro{
position:fixed;
left:0;
top:0;
layer-background-color:green;
background-image:url(dogr.jpg);
border:0.1px solid brown;
z-index:10;
}

			.img-circle{
					border-radius:70%;
			}
			.hexagon {
    background: url(http://placekitten.com/400/400/);
    width: 10px;
    height: 30px;
    position: relative;
}

]
.top {
    top: 0;
    border-bottom: 13px solid transparent;
}

.bottom {
    bottom: 0;
    border-top: 13px solid transparent;
}

			p{
				font-size:40;
				font-weight:bold;
				color:6960ec;
				text-align:center;
				font-style:Franklin Gothic Heavy;
			
			}
			.enlarge:hover{
					transform:scale(2,1);
					transform-origin:0 0;
					
			}
	</style>
</head>

<body >
		
	<table align='center' width='100%' cellspacing='0' cellpadding='5'>
		<tr align='center' width='100%'>
			<td colspan='3' bgcolor='6960ec' align='left' width='100%'>
			
				<font face='Bodoni MT Black' size='+5' color='white'><b>Ideabook</b></font>
				
			</td>
		</tr>
		
		
		<?php
								$con=mysqli_connect('localhost','root','','rstudio');
								//mysql_select_db('rstudio');
								
								//$sql="select * from idaebook";
								//$ds=mysql_query($sql);
						        
								$r=mysqli_query($con, "select * from idaebook");
					$count=1;					
								while($row=mysqli_fetch_array($r))
								{
								 $pic=$row[1];
								 $col=$row[2];
								echo"<td  style='width:10px' height:10px;>
			
				
				<a href='contm.php' >
				<img class ='enlarge' src='$pic'  border='0' width='500' height='500'></a>
				<p>$col</p>
			</td>";
			if (($count==3)||($count==6)||($count==9))
			echo"</tr><tr>";
			
			$count++;
			
								}	
								
								
								
?>
			</table>
		
</body>