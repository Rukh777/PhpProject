<head>
	<style>



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
	</style>
</head>

<body >

<script>


</script>
		
	<table align='center' width='100%' cellspacing='0' cellpadding='5'>
		<tr align='center' width='100%'>
			<td colspan='3' bgcolor='6960ec' align='left' width='10'>
							<font face ='times new roman' size='+5' color='white'>Kitchen Styles</font>
			</td>
		</tr>
		
		<?php
			
								mysql_connect('localhost','root','');
								mysql_select_db('rstudio');
								
								$sql="select * from kitchenstyle";
								$ds=mysql_query($sql);
						
					$count=1;					
								while($row=mysql_fetch_array($ds))
								{
								 $p=$row[1];
								 $col=$row[2];
								
								echo"<td>
				<a href='kitco.php'>
				<img src='$p' class='img-circle' border='0'  width='550' height='500'></a>
				<p>$col</p>
			</td>";
			if (($count==3)||($count==6)||($count==9))
			echo"</tr><tr>";
			
			$count++;
			
								}	
								
								
								
?>
	</table>		
			
</body>