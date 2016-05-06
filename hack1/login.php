<!DOCTYPE HTML>
<!--
	Linear by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Linear</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
<?php 
$hostname_con_hack = "localhost";

$database_con_hack = "hack";

$username_con_hack = "root";

$password_con_hack = "";
error_reporting(0);

$con_hack = mysql_pconnect($hostname_con_hack, $username_con_hack, $password_con_hack) or trigger_error(mysql_error(),E_USER_ERROR); 
?>    
<?php 
mysql_select_db($database_con_hack, $con_hack);

$que="UPDATE log set uid=0,chk=0 where chk=1";
	mysql_query($que);


if($_POST['name']){
	//echo "YES!!!";
extract($_POST);
$q="SELECT uid from user";
$nn=mysql_query($q,$con_hack);
while($nz=mysql_fetch_assoc($nn))
$n++;
$n++;
$query_ins = "INSERT INTO user VALUES('$n','$username','password','$phn','$name','$email')";
//echo $n;
$name = mysql_query($query_ins, $con_hack) or die(mysql_error());

}


?>

	<body>

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="../index">Homepage</a></li>
						<li class="active"><a href="../hack2/companies.php">Companies</a></li>
					</ul>
				</nav>
			</div>
		</div>
	<!-- Header --> 

	<!-- Main -->
		<div id="main" >
				
                <div id="him1">
                
                <h1 id = "him" > LOGIN </h1>
            
                <div id="content" class="container">
				
                <section >
                	<form name = "login" action="../index" method="post" id="ffm">
                      Username
                        <input type = "text" name="username" id="uname">
                        <br>
                                          Password
                        <input type ="password" name = "password" id="pass" ><br>
        				<br>         	           <button type = "submit" name="submit" id="butt">LOGIN </button>             
                    </form>
                    
				</section>
			</div>
            </div>
            
            <div id="him2">
            <h1 id = "him"> SIGN UP </h1>
            <div id="content1" class="container">
            <section>            	
                <form name = "signup" action="login" method="post" id="him10">
               
                	<input type = "text" name="username" placeholder="Username" id="uname" required><br>
                	<input type = "password" name="password" placeholder="Password" id="pass" required><br>
<input type="name" name="name" placeholder="Name" id="pass" required><br>
                	<input type="email" name="email" placeholder="Email" id="pass" required><br>
                	<input type="number" name="phn" placeholder="Phone Number" id="pass" min="10" required><br>
                	           	     <button type = "submit" name="submit" id = "butt">SIGN UP </button>
            	</form>
            </section>
            </div>
            </div>
		</div>
	<!-- /Main -->

	
	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<section>
					<header>
						<h2>Get in touch</h2>
						<span class="byline">Lets Enjoy our Job</span>
					</header>
					<ul class="contact">
						<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
						<li class="active"><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="#" class="fa fa-dribbble"><span>Pinterest</span></a></li>
						<li><a href="#" class="fa fa-tumblr"><span>Google+</span></a></li>
					</ul>
				</section>
			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="http://www.codechef.com/users/mladia163">Mayank Ladia</a> 
                <a href="http://www.codechef.com/users/prasha14nt"> Prashant Gupta</a>
                </div>
		</div>
<?php 
if($_POST['name']){
?>   
<script>
alert("SignUp Successfull");
</script>
<?php } ?>

	</body>
</html>