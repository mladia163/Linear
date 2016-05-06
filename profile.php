<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html><!DOCTYPE HTML>
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
			<link rel="stylesheet" href="css/style1.css" />
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
mysql_select_db($database_con_hack, $con_hack);
//$user=1;
?>
<?php   

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

?>
<?php 
$com="SELECT cid from comp where chk=0";
 $cc=mysql_query($com,$con_hack);
 $ccr=mysql_fetch_assoc($cc);
 $cid=$ccr['cid'];
 
 $lqr="SELECT * from luxury where cid='$cid'";
 $lq=mysql_query($lqr,$con_hack);
 $lux=mysql_fetch_assoc($lq);
 

?>  
    
 
	<body>

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
                
					<ul>
                   
						<li class="active"><a href="index">Homepage</a></li>
					<!--	<li><a href="left-sidebar.html">Left Sidebar</a></li>
						<li><a href="right-sidebar.html">Right Sidebar</a></li>
						--><li><a href="no-sidebar">Companies</a></li>
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
					<span class="tag">By TEMPLATED</span>
				</div>
			</div>
		</div>
	<!-- Header --> 

	<!-- Main -->
		<div id="main">
			<div id="content" class="container">
				<section>
					<header>
						<h2>Luxury</h2>
						<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span> 
					</header>
								

				</section>
			</div>
		</div>
	<!-- /Main -->

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat.&rdquo;</blockquote>
				</section>
			</div>
		</div>
	<!-- /Tweet -->

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<section>
					<header>
						<h2>Get in touch</h2>
						<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
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
				Design: <a href="http://www.codechef.com/users/mladia163"> Mayank Ladia </a>
                <a href="http://www.codechef.com/users/prasha14nt"> Prashant Gupta </a>
			</div>
		</div>


	</body>
</html>