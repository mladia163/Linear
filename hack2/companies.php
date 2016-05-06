<!DOCTYPE HTML>
<!--
	Linear by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Linear by TEMPLATED</title>
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
			<link rel="stylesheet" href="css/loll.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
    
    <?php 
	session_start();
$hostname_con_hack = "localhost";

$database_con_hack = "hack";

$username_con_hack = "root";

$password_con_hack = "";
error_reporting(0);

$con_hack = mysql_pconnect($hostname_con_hack, $username_con_hack, $password_con_hack) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database_con_hack, $con_hack);
//$user=1;
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
	<body class="homepage">

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
                
					<ul>
                   
						<li ><a href="../index.php">Homepage</a></li>
					<!--	<li><a href="left-sidebar.html">Left Sidebar</a></li>
						<li><a href="right-sidebar.html">Right Sidebar</a></li>
						--><li class="active"><a href="companies">Companies</a></li>
                       <?php if(!$user){ ?> <li ><a href="../hack1/login.php">Login</a></li>
                       
                       <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </span>
                        <?php } 
						else {?>
                       <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="../hack1/login.php" style="color:red">LOGOUT </a></span> <?php } ?>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">Linear</a></h1>
				</div>
			</div>
		</div>
        
	<!-- Main -->
		<div id="main">
			<div id="content" class="container">
				<h1 id="com_head">LIST OF COMPANIES</h1>
                <span id="pok"><br>
                <a href="../facebook"> Facebook </a><br>
                <a href="../google"> Google </a><br>
                <a href="../flipkart"> Flipkart </a><br>
                <a href="../microsoft.php"> Microsoft </a><br>
                </span>
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
				Design: <a href="http://www.codechef.com/users/mladia163">Mayank Ladia</a>
                <a href="http://www.codechef.com/users/prasha14nt">Prashant Gupta</a>
			</div>
		</div>

	</body>
</html>