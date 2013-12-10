<!DOCTYPE html>

<?php
    if ( isset( $_SESSION['YOUR_SID'] ) ) {
    	session_start();
    	//$_currentSessionId = $_SESSION['YOUR_SID'];
	}
?>
				
<html lang="en" class="no-js">
	
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		
		<title>Taptastic</title>
		
		<link rel="shortcut icon" href="images/favicon.png">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/piemenu.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/modal.css" />
		<link rel="stylesheet" type="text/css" href="css/slide.css"/>
		<link rel="stylesheet" type="text/css" href="css/jquery.jqplot.min.css"/>
		
		<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
		<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>	  	
		<script type="text/javascript" src="js/slide.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		
		<script type="text/javascript" src="js/graphs/jquery.jqplot.min.js"></script>
		<script type="text/javascript" src="js/graphs/jqplot.cursor.min.js"></script>
		<script type="text/javascript" src="js/graphs/jqplot.highlighter.min.js"></script>
		<script type="text/javascript" src="js/graphs/jqplot.pointLabels.min.js"></script>
		<script type="text/javascript" src="js/graphs/jqplot.barRenderer.min.js"></script>
		<script type="text/javascript" src="js/graphs/jqplot.canvasAxisTickRenderer.min.js"></script>
		<script type="text/javascript" src="js/graphs/jqplot.dateAxisRenderer.min.js"></script>
		<script type="text/javascript" src="js/graphs/jqplot.canvasTextRenderer.min.js"></script>
		<script type="text/javascript" src="js/graphs/jqplot.canvasAxisLabelRenderer.min.js"></script>
		
		<?php include $_SERVER['DOCUMENT_ROOT'].'/Taptastic-Website/includes/piemenu.php'; ?>
	</head>
	
	<body>
		
		<div class="container">
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<!-- Panel -->
				<div id="toppanel">
					<div id="panel">
						<div class="content clearfix">
							<div class="left">
								<h1>Welcome to Taptastic</h1>
								<h2>Log into the website to check out all the statistics</h2>		
								<p class="grey">This basically acts like a administrator page for the mobile application. Professor and the TA will be the admin</p>
							</div>
							<div class="left">
								<!-- Login Form -->
								<form class="clearfix" method="post" enctype="multipart/form-data">
									<h1>Member Login</h1>
									<label class="grey" for="log">Username:</label>
									<input class="field" type="text" name="log" id="log" value="professor" size="23" />
									<label class="grey" for="pwd">Password:</label>
									<input class="field" type="password" name="pwd" id="pwd" size="23" />
					            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Remember me</label>
				        			<div class="clear"></div>
				        			<div align="center">
				        			<input type="submit" name="submit" id="submit" value="Login" class="bt_login" onclick="login();" />
				        			</div>
								</form>
							</div>
							<div class="left right">			
								<!-- Register Form -->
								<form action="#" method="post">
									<h1>Not a member yet? Sign Up!</h1>				
									<label class="grey" for="signup">Username:</label>
									<input class="field" type="text" name="signup" id="signup" value="" size="23" />
									<label class="grey" for="email">Email:</label>
									<input class="field" type="text" name="email" id="email" size="23" />
									<label>A password will be e-mailed to you.</label>
									<input type="submit" name="submit" value="Register" class="bt_register" />
								</form>
							</div>
						</div>
				</div> <!-- /login -->	
				
					<!-- The tab on top -->	
					<div class="tab">
						<ul class="login">
							<li class="left">&nbsp;</li>
							<li id="toggle">
								<a id="open" class="open" href="#"><?php
								if ($_SESSION["username"] != '') {echo $_SESSION["username"];
								} else {echo "Log In";
								}
 								?></a>
								<a id="close" style="display: none;" class="close" href="#">Close</a>			
							</li>
							<?php if($_SESSION["username"]!=''){?><li class="sep">|</li><li><a href="#" class="logout" id="logout">Logout</a></li><?php } ?>
							<li class="right">&nbsp;</li>
						</ul> 
					</div> <!-- / top -->
					
				</div> <!--panel -->
			</div>
			<header>
				<h1>Taptastic<span>A smart and intutive interface to view your class statistics</span></h1>	
			</header>
			<div class="component">
				<h2>Taptastic</h2>
				<!-- Start Nav Structure -->
				<?php if($_SESSION["username"]!=''){?>
				<button class="cn-button" id="cn-button">Menu</button>
				<div class="cn-wrapper" id="cn-wrapper">
					<ul>
						<li><a href="#" id="pieMenuItem1"><span>Fall '13</span></a></li>
						<li><a href="#" id="pieMenuItem2"><span>Spring '13</span></a></li>
						<li><a href="#" id="pieMenuItem3"><span>Messages</span></a></li>
						<li><a href="#" id="pieMenuItem4"><span>Statistics</span></a></li>
						<li><a href="#" id="pieMenuItem5"><span>Projects</span></a></li>
						<li><a href="#" id="pieMenuItem6"><span>Contact</span></a></li>
						<li><a href="#" id="pieMenuItem7"><span>About</span></a></li>
					 </ul>
				</div>
				<?php } ?>
				<!-- End of Nav Structure -->
			</div>
			<?php if($_SESSION["username"]==''){?>
				<h4 align="center"><i>Log into the website to see all the statistics</i></h4><?php
				}
			?>
				
		</div>
			<section>
				<p style="font-size:12px;position:fixed;bottom:0;">
					The University of Southern California does not screen or control the content on this website and thus does not guarantee the accuracy, integrity, or quality of such content. All content on this website is provided by and is the sole responsibility of the person from which such content originated, and such content does not necessarily reflect the opinions of the University administration or the Board of Trustees
				</p>
			</section>
		</div>
			
		<script src="js/polyfills.js"></script>
		<script src="js/piemenu.js"></script>
		
		<div class="modal fade" id="classInfo" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 id="title" class="modal-title">Something Went Wrong</h4>
					</div>
					<div class="modal-body">
						<div id="description" style="text-align: center;">
							<h5>Snap! you shouldn't be seeing this.</h5>
						</div>
						<div id="trailer" style="text-align: center; margin: 30px 0px 10px 0px;">
							<p> Quickly close this! </br> We are working on it...</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</body>
	
</html>