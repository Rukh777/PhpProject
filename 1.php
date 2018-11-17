

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<?php
session_start();
$con=mysqli_connect('localhost','root','','rstudio');
if(isset($_REQUEST["sub"]))
{

$name=$_POST["uname"];
$email=$_POST["email"];
$pass=$_POST["password"]; 
//$sql="select * from registration where email='$uname'  and password='$pass'";

//$r=mysql_query($sql);

//$r=mysqli_query($con, "insert into registration ( name, email, password) values ('$name', '$email', '$pass' ");
$sql= "insert into  registration ( name, email, password) values('$name', '$email', '$pass')";
mysqli_query($con , $sql);
//if($row=mysqli_fetch_array($r))


$_SESSION['user']=$uname;


	header("location:log1.php");


	
}	
?>

<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
       
        <title>register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<!--<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />-->
    </head>
    <body style='background-image: url(bed2.jpg); background-repeat:no-repeat; background-size:2200px 1000px;'>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1> <font face ='Times new roman' color='white'>Registration Now</font></h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                       
                        <div id="login" class="animate form">
                            <form  action="1.php" method="post" > 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="uname" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="onfirm required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
								<input type="submit" name ="sub" value="Sign up"/>
								</p>
                                <!--<p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>-->
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>