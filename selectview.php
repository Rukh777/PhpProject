
<table border='0' bgcolor='' align='center' width='100%' cellpadding='10' cellspacing='0' style='border-radius:50px';>
<tr align='center'><td bgcolor='3a539b'><font face ='Bodoni MT' color='red' size='+5'> User Information	</font></td></tr>	
	<?php
	
	$con=mysqli_connect("localhost","root","","rstudio");
	//mysql_select_db("rstudio");
	
	//$sql="select * from userinsert ";
	
	//$rs=mysql_query($sql);
	$r=mysqli_query($con, "select * from userinsert");
	
 if($row=mysqli_fetch_array($r))
	{
	
	echo"<tr align='center'>";
	echo"<td style='border-radius:50px'; >";
	echo"<table border='3' align='center' width='50%' cellpadding='50' cellspacing='0' style='border-radius:50px';>";
	
	echo"<tr align='center'>";
	
			/*echo"<td>";
				echo $row[0];
			echo"</td>";*/
			//echo"<td colspan='2' style='width:550px;padding:10px 0px' >";
				//echo "<img src='upload/$row[10]' height='400' width='100%'>";
			//echo"</td>";
			
			echo"<td style='padding:10px 30px;border-color:red;border-radius:50px'; >";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";
			echo"<font face='Bodoni MT' size='+3' color='orange'>User Email</font>";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			
			echo "<font face='Bodoni MT' size='+2' color='4b77be'> $row[13]</font>";
			echo"<br>";
			echo"<br>";
			

			echo"<font face='Bodoni MT' size='+3' color='orange'>User Designer</font>";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"<font face='Bodoni MT' size='+2' color='4b77be'> $row[1]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>";
			echo"<br>";echo"<br>";
			
			
			echo"<font face='Bodoni MT' size='+3' color='orange'>Space</font>";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo" <font face='Bodoni MT' size='+2' color='4b77be'>$row[2]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>";
			echo"<br>";echo"<br>";
			
			echo"<font face='Bodoni MT' size='+3' color='orange'>Style</font>";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo " <font face='Bodoni MT' size='+2' color='4b77be'>$row[3]</font>";
			echo"<br>";echo"<br>";
			
			
			echo"<font face='Bodoni MT' size='+3' color='orange'>State</font>";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo" <font face='Bodoni MT' size='+2' color='4b77be'> $row[4]</font>";
			echo"<br>";echo"<br>";
			
			
			echo"<font face='Bodoni MT' size='+3' color='orange'>City</font>";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo" <font face='Bodoni MT' size='+2' color='4b77be'> $row[5]</font>";
			echo"<br>";echo"<br>";
			
			echo"<font face='Bodoni MT' size='+3' color='orange'>Area</font>";
			echo" <font face='Bodoni MT' size='+3' color='purple'> $row[6]</font>";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo"<font face='Bodoni MT' size='+3' color='orange'>unit</font>";	
			echo" <font face='Bodoni MT' size='+3' color='purple'> $row[7]</font>";
			echo"<br>";
			
			echo"<font face='Bodoni MT' size='+3' color='orange'>Covered</font>";
			echo" <font face='Bodoni MT' size='+3' color='purple'> $row[8]</font>";
				echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			
								
				echo"<font face='Bodoni MT' size='+3' color='orange'>unit</font>";	
				echo" <font face='Bodoni MT' size='+3' color='purple'> $row[9]</font>";
				echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo"<br>";
				echo"<font color='red' face='Bodoni MT' size='+3'><B>Budget&nbsp;</B></font>";
				echo "<font color='blue' face='Bodoni MT' size='+3'>$row[11]/-</font>";
				echo"<br>";
				echo"<font color='red' face='Bodoni MT' size='+3'><B>Message&nbsp;</B></font>";
				echo "<font color='grey' face='Bodoni MT' size='+2'>$row[12]</font>";
				
					echo"</td>";
			
	echo "</tr>"; echo"</td>";
			
	echo "</tr>";
		echo "</table>";
		
	/*echo "<tr align='center' >";
		echo "<td >";
			echo $row[0];
		echo "</td>";
		echo "<td>";
			echo $row[1];
		echo "</td>";
		echo "<td>";
			echo $row[2];
		echo "</td>";
		echo "<td>";
			echo $row[3];
		echo "</td>";
		echo "<td>";
			echo $row[4];
		echo "</td>";
		echo "<td>";
			echo "<img src='upload/$row[5]' height='300' width='450' >";
		echo "</td>";
		
		echo "<td>";
			echo"<a href='rdelete.php?id=$row[0]'>Delete</td>";
		echo "</td>";
		echo "<td>";	
			echo"<a href='uploadud.php?id=$row[0]'>Update</td>";
		echo "</td>";
	echo "</tr>";*/
	}

	
?>
<tr align='center'>
	<td>
			<?php
			include("decorfoot.php");
			
			 
			?>
	</td>
</tr>

</table>

