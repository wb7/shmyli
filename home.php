<?php
include('inc/content.class.php');
include('inc/sql.php');
?>
<html>
<head>
	<title><?php $content->getString("page-title", $db);?></title>
	<link rel="stylesheet" href="css/style.css" /> 
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="js/urlshortener.js"></script> 
</head>
<body>
<div id="fix-top"></div>
<div id="wrapper">
<div id="theDiv">
<div id="header">
<div id="block-nav">
			<ul id="menu-nav">
				<li class="has-flyout">
					<a href="index.php"><img src="img/grid-menu.png"></a>
					<ul class="flyout">
						<li><a href="what.php"><?php $content->getString("what-title", $db);?></a></li>
						<li><a href="who.php"><?php $content->getString("who-title", $db);?></a></li>
						<li><a href="why.php"><?php $content->getString("why-title", $db);?></a></li>
					</ul>
				</li>
			</ul>
		</div>
</div>
		<div id="logo">
			<a href="#"> <img src="img/logo.png" class="home" alt="Logo wb7urlShortener"/></a>
		</div>
<div id="container">
		<form action="" method="post" id="form">
			<input type="text" id="url" name="url" placeholder="Your long link here..." class="">
			<input class="button-link" type="submit" value="Generate Link!">
		</form>
	</div> 
	<div id="boundary"></div>
</div>
	<div class="hold-info">
	<div class="inline info"> 
	<div class="block-text">
	<p class="text">
				Lorem ipsum dolor sit amet,<br />
				consetetur sadipscing elitr,<br />
				sed diam nonumy eirmod tempor<br />
				invidunt ut labore et dolore<br />
				magna aliquyam Lorem ipsum<br />		
	   </p>
			</div>
			</div>
			<div class="inline info">
			<div class="block-text">
				<p class="text">
					Lorem ipsum dolor sit amet,<br />
				consetetur sadipscing elitr,<br />
				sed diam nonumy eirmod tempor<br />
				invidunt ut labore et dolore<br />
				magna aliquyam Lorem ipsum<br />
				</p>
				</div>
			</div>
			<div  class="inline info">
			<div class="block-text">
				<p class="text">
					Lorem ipsum dolor sit amet,<br />
				consetetur sadipscing elitr,<br />
				sed diam nonumy eirmod tempor<br />
				invidunt ut labore et dolore<br />
				magna aliquyam Lorem ipsum<br />
					
				</p>
				</div>
				</div>
				</div>
			</div>
<footer>
<a href="IMPRESSUM HERE">Impressum</a> | Proudly powered by <a href="http://urlShortener.wb7.eu">wb7urlShortener</a> | <!-- DONT REMOVE THE FOLLOWING LINK!-->Impressed by <a href="http://www.thierryli.com/">www.thierryli.com</a> - Thanks :)
</footer>	
</body>
</html>
