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
 
 $com="UPDATE comp set cid=3 where chk=0";
 mysql_query($com,$con_hack);
 
 $lqr="SELECT * from luxury where cid=3";
 $lq=mysql_query($lqr,$con_hack);
 $lux=mysql_fetch_assoc($lq);
 
 $fqr="SELECT * from food where cid=3";
 $fq=mysql_query($fqr,$con_hack);
 $food=mysql_fetch_assoc($fq);
 
 $tqr="SELECT * from travel where cid=3";
 $tq=mysql_query($tqr,$con_hack);
 $tr=mysql_fetch_assoc($tq);
 
 
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
				</div>
			</div>
		</div>
	<!-- Header --> 

	<!-- Main -->
		<div id="main">
			<div id="content" class="container">
				<section>
					<header>
						<h2><?php echo "Facebook" ?></h2>
						<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
					</header>
					<div id="allt">
				<a href="travel">	<div id="types">
                    <h2>Travel</h2>
                 <?php $n=3; do { ?> <div id="postt">

                    <?php 
					echo $tr['ques'];
					?>
                 <!--   <div id="linked"><a id="zz" href="">Read More</a></div> -->
                    </div> <?php }while( $tr=mysql_fetch_assoc($tq) ); ?>
                    
                    </div></a>
               <a href="food">	<div id="types">
                    <h2>Food</h2>
                 <?php $n=3; do { ?> <div id="postt">

                   <?php 
				   echo $food['ques'];
				   ?>
                 <!--   <div id="linked"><a id="zz" href="">Read More</a></div> -->
                    </div> <?php }while( $food=mysql_fetch_assoc($fq) ); ?>
                    
                    </div></a>
                    <a href="luxury">	<div id="types">
                    <h2>Luxury</h2>
                 <?php $n=3; do { ?> <div id="postt">

                    <?php 
					echo $lux['ques'];
					?>
                 <!--   <div id="linked"><a id="zz" href="">Read More</a></div> -->
                    </div> <?php }while( $lux=mysql_fetch_assoc($lq) ); ?>
                    
                    </div></a></div>
				</section>
			</div>
		</div>
	<!-- /Main -->

	<!-- Tweet -->
	<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo; It isn’t enough to just do your job, you had to have an interest in it, even a passion for it.&rdquo;</blockquote>
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
				Design: <a href="http://www.codechef.com/users/mladia163"> Mayank Ladia </a>
                <a href="http://www.codechef.com/users/prasha14nt"> Prashant Gupta </a>
			</div>
		</div>

	</body>
</html>