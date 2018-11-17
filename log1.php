<?php
session_start();
	$con=mysqli_connect("localhost","root","","rstudio");

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<title>Show Inline validation Messages</title>
<link href="css/template.css" rel="stylesheet" type="text/css" />
<link href="css/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.6.min.js" type="text/javascript"></script>
<script src="js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
    jQuery(document).ready(function() {
    jQuery("#form1").validationEngine();
    });

    </script>



<html>
		<head>
			<link rel='stylesheet' href='style1.css'/>

			</head>
<body style='background-image: url(dogr.jpg); background-repeat:no-repeat; background-size:2200px 1000px;'>
		<table  align='center' width='95%' height='100%' border='0' style='box-shadow:1px 1px 40px #008B8B' cellspacing=0 cellpadding=0>

			<tr>

				<td width='100%'>

				<form action=""  id='form1' method='post'>
					<table  id='login' align='right' height='60%' width='40%' style='margin-top:60px' >
						<tr>
								<td colspan='2' align='left' style='background:black;color:white;font-weight:bold;height:30px'>
								
								PLEASE LOGIN !
	
								</td>

						</tr>
						<tr>
								<td colspan='2'>
	
										&nbsp;
								</td>

						</tr>
						<tr>
								<td><input type='text' name='uname' value='' size='50' placeholder='Email'
										style='border:2px solid #888;height:30px' id='v1' Class="validate[required]" required>
								</td>
						</tr>
						<tr>
								<td colspan='2'>
		
										&nbsp;
								</td>

						</tr>
						<tr>
							<td><input type='password' name='pass' value='' size='50' placeholder='Password' style='border:2px solid #888;height:30px'  
																id='v2' Class="validate[required]" required>
							</td>
						</tr>
						<tr>
							<td colspan='2'>

										&nbsp;
							</td>
						</tr>
						<tr>
							<td colspan='2' align='center' >
								<input type='submit' value='login' name='sub' id='b' class='click' style='background:#9ACD32;color:white;font-weight:bold;border-radius:5px;width:100px;height:30px'>
							</td>
						</tr>
		</table>

</form>
</body>
</html>
<?php

if(isset($_REQUEST["sub"]))
{

$email=$_POST["uname"];
$password=$_POST["pass"]; 
//$sql="select * from registration where email='$uname'  and password='$pass'";

//$r=mysql_query($sql);

$r=mysqli_query($con, "select * from registration where email='$email' and password='$password'");
if($row=mysqli_fetch_array($r))
{    

$_SESSION['email']=$email;


	header("location:decoruser.php");

	}
	else
    echo "<right><p style='color:red;font-size:20px'>Invalid User.......!!!!!!</p></rights>";	
}	
?>
</td>
</tr>	


<tr>
	<td colspan='2'>
		&nbsp;
	
	</td>

</tr>


	





</table>	
</body>
</html>