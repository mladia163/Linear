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
			<link rel="stylesheet" href="css/style1.css" />
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
	
if($_POST['comm']){
	echo "YO";
	$p=$_POST['comm'];
	$qq="INSERT INTO answer VALUES(2,'$p','$un','')";
	mysql_query($qq,$con_hack);
}

?>

<?php 
$com="SELECT cid from comp where chk=0";
 $cc=mysql_query($com,$con_hack);
 $ccr=mysql_fetch_assoc($cc);
 $cid=$ccr['cid'];
 
 $fqr="SELECT * from food where cid='$cid'";
 $fq=mysql_query($fqr,$con_hack);
 $food=mysql_fetch_assoc($fq);
 

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
						<h2>Food</h2>
					</header>
					<div id="allt">
					<div id="typed">
  <script>  
   var b="anss";
  var a=1;	
  var xx="linked";
  function fun1(x){
	  	var ln=x.length;
		var lnn=x[ln-1];
		if(lnn=='d')
		var z=b;
		else
  		var z=b+lnn;
		//alert(z);
		var zz=document.getElementById(z);
		zz.style.display="inline";
  }
    </script>            
                 <?php $n=3; do { ?> <div id="postt">
           <?php echo $food['ques'];
		        /*   echo" Recently I was working on my laptop at a Starbucks. All of a sudden my dupatta got pulled back to my shoulders. When I realized and turned back a guy was passing by, he was walking towards the counter. "; */?>
       <script>
      var c=b+a;
	   var xy=xx+a;
	   document.getElementById("anss").setAttribute("id",c);
	   document.getElementById("linked").setAttribute("id",xy);
	   a++;
       
       </script>
                    <div id="linked" onClick="fun1(this.id)"><a href="#content" style="color:#A60407">Comments</a></div>
                    
                    
                    <?php 
	$f=$food['pid'];
	//echo $f;
	$ansq="SELECT * from answer where pid='$f'";
	$ansqr=mysql_query($ansq,$con_hack);
	$ans=mysql_fetch_assoc($ansqr);				
	//echo $ans['pid'];				
	?>
                    <div id="anss" style="display:none">
                    <ul>
                 <?php do{ ?> <li> -> <?php 
					 echo $ans['ans'];
					 echo "\n";
					//echo "yooo";
					
					?></li><br><?php }while($ans=mysql_fetch_assoc($ansqr)); ?>
                   <li><form action="food" method="post"><input type="text" name="comm" id="comm"> <button type="submit">Comment</button></form></li>
                   </ul>
                   </div>
                    </div> <?php }while( $food=mysql_fetch_assoc($fq) ); ?>

                    
                    </div>
                    
                    
                    </div>			

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