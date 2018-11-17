<?php
session_start();
$s=$_SESSION['user'];
$con= mysqli_connect("localhost","root","","rstudio");
//mysql_select_db("rstudio");
	
//$sql="SELECT * FROM  registration WHERE  email LIKE '$u'"; 
$r=mysqli_query($con, "select * from registration WHERE  email LIKE '$s'");
//$run=mysqli_query($sql);
	
while($row=mysqli_fetch_array($r))
{
$s=$row[1];
}			
	
?>

<html>

	<body>
			
			<table width='100%' align='center' border='0' >
			<tr align='center' >
				<td colspan='5' bgcolor='black' align='left'>
				<?php 	
				echo "<font color='white' size='+3'>Welcome&nbsp;<u>$s</u></font>";
				?>
				
				</td>
			</tr>
					<tr align='center'>
						<td colspan='5'>
								<?php 
									include("menulist.php");

								?>
						</td>
					</tr>
					
					<tr align='center'>
						<td colspan='5'>
								<?php 
									include("decor.php");
								?>
						</td>
					</tr>
					
					
					<tr align='center'>
						<td>
							<?php
									include("sitecorner.php");
							
							?>
						
						</td>
					</tr>
					
					<tr align='center' >
						<td rowspan='2' width='80%' >
									<font face='Andalus' size='+2' color='c0392b'><b>WELCOME TO R DESIGN STUDIO</b><hr><br><br></font><font face='Andalus' size='+2' color='grey'>R Design Studio is granted firm for interior decoration and deliver an awesome interior design to exceeds customer's expectation.<br> Our designers are well qualified in creative interior designing which we believe that it defiantly enhance visual impact about your interior expectations. We believe that our designed ideas are highly recommended for Royal and descent cutting edge interior as per requirements in a budget you can afford and within the time frame you expect. We effectively work on all sort of interior Designing , Residential Interior Designing . Our experts provide consultancy in Residential Projects.</font>
						
						</td>
						<td bgcolor='black'>
								<font face='Andalus' size='+2' color='edda74'>OUR VISION</font> <br><font face='Andalus' size='+1' color='white'>"Convert the concepts and dreams of clients into reality through innovative design ,perfect planning and efficient execution."</font>
					
						</td>
					</tr>
					<tr align='center'>
						<td bgcolor='black'>
								<font face='Andalus' size='+2' color='edda74'>OUR MISSION</font><br><font face='Andalus' size='+1' color='white'>"To be a name to reckon with in the dynamic field of INTERIOR DESIGN ."</font>
						
						</td>
			
					</tr>
		
					
					
					
					<tr align='center'>
						<td colspan='5'>
								<?php 
									include("profile.php");
								?>
						</td>
					</tr>

					
					<tr align='center'>
						<td colspan='5'>
								<?php 
									include("decorfoot.php");
								?>
						</td>
					</tr>
				</table>
	</body>
</html>