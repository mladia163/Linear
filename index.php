<!DOCTYPE HTML>
<!--
	Linear by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Hack</title>
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
//$user=1;
?>
<?php
mysql_select_db($database_con_hack, $con_hack);
$user=0;
if($_POST['username'])
{
//	echo "YES!!";
	$uname=$_POST['username'];
	$qq="SELECT * from user WHERE uname='$uname'";
	$qqq=mysql_query($qq,$con_hack);
	$qr=mysql_fetch_assoc($qqq);
	$uid=$qr['uid'];
	
	$que="UPDATE log set uid='$uid',chk=1 where uid=0";
	mysql_query($que);
	$user=$uid['name'];
}
else{
	$uu="SELECT uid from log";
	$uu=mysql_query($uu,$con_hack);
	$u=mysql_fetch_assoc($uu);
	$un=$u['uid'];
	if($un){
		$uq="SELECT name from user where uid='$un'";
		$uu=mysql_query($uq,$con_hack);
		$ua=mysql_fetch_assoc($uu);
		$user=$ua['name'];
	}
	else
	$user=0;
}
?>    

    
    
    
	<body class="homepage">

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
                
					<ul>
                   
						<li class="active"><a href="index">Homepage</a></li>
					<!--	<li><a href="left-sidebar.html">Left Sidebar</a></li>
						<li><a href="right-sidebar.html">Right Sidebar</a></li>
						--><li><a href="hack2/companies">Companies</a></li>
                       <?php if(!$user){ ?> <li ><a href="hack1/login">Login</a></li>
                       
                       <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </span>
                        <?php } 
						else {?>
                       <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="hack1/login" style="color:red">LOGOUT </a></span> <?php } ?>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">Linear</a></h1>
					<span class="tag"></span>
				</div>
			</div>
		</div>

	<!-- Featured -->
	<!--	<div id="featured">
			<div class="container">
				<header>
					<h2>Welcome to Linear</h2>
				</header>
				<p>This is <strong>Linear</strong>, a responsive HTML5 site template freebie by <a href="http://templated.co">TEMPLATED</a>. Released for free under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so use it for whatever (personal or commercial) &ndash; just give us credit! Check out more of our stuff at <a href="http://templated.co">our site</a> or follow us on <a href="http://twitter.com/templatedco">Twitter</a>.</p>
				<hr />
				<div class="row">
					<section class="4u">
						<span class="pennant"><span class="fa fa-briefcase"></span></span>
						<h3>Maecenas luctus lectus</h3>
						<p>Curabitur sit amet nulla. Nam in massa. Sed vel tellus. Curabitur sem urna, consequat vel, suscipit in, mattis placerat, nulla. Sed ac leo.</p>
						<a href="#" class="button button-style1">Read More</a>
					</section>
					<section class="4u">
						<span class="pennant"><span class="fa fa-lock"></span></span>
						<h3>Maecenas luctus lectus</h3>
						<p>Donec ornare neque ac sem. Mauris aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo. Donec magna.</p>
						<a href="#" class="button button-style1">Read More</a>
					</section>
					<section class="4u">
						<span class="pennant"><span class="fa fa-globe"></span></span>
						<h3>Maecenas luctus lectus</h3>
						<p>Curabitur sit amet nulla. Nam in massa. Sed vel tellus. Curabitur sem urna, consequat vel, suscipit in, mattis placerat, nulla. Sed ac leo.</p>
						<a href="#" class="button button-style1">Read More</a>
					</section>

				</div>
			</div>
		</div>
-->
	<!-- Main -->
		<div id="main">
        <h2>WELCOME</h2>
			<div id="content" class="container">

				<div class="row">
					<section class="6u">
						<a href="facebook" class="image full"><img id="imagee" src="images/fb.jpg" alt=""></a>
						<header>
							<h2>Facebook</h2>
						</header>
					</section>				
					<section class="6u">
						<a href="google" class="image full"><img id="imagee" src="images/google.jpg" alt=""></a>
						<header>
							<h2>Google</h2>
						</header>
					</section>				
				</div>

				<div class="row">
					<section class="6u">
						<a href="microsoft" class="image full"><img  id="imagee" src="images/microsoft.jpg" alt=""></a>
						<header>
							<h2>Microsoft</h2>
						</header>                    
                        </p>
                        
					</section>				
					<section class="6u">
						<a href="flipkart" class="image full"><img  id="imagee" src="images/flipkart.png" alt=""></a>
						<header>
							<h2>Flipkart</h2>
						</header>
					</section>				
				</div>
			
			</div>
		</div>

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo; It isn’t enough to just do your job, you had to have an interest in it, even a passion for it.&rdquo;</blockquote>
				</section>
			</div>
		</div>

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

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="http://www.codechef.com/users/mladia163">Mayank Ladia </a> &nbsp; 
                <a href = "http://www.codechef.com/users/prasha14nt"> Prashant Gupta </a>
			</div>
		</div>

	</body>
</html>