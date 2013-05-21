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
			<a href="#"><img src="img/logo.png" class="home" alt="Logo"/></a>
		</div>
<div id="container">
		<form action="" method="post" id="form">
			<input type="text" id="url" name="url" placeholder="<?php $content->getString("textfield", $db);?>" class="">
			<input class="button-link" type="submit" value="<?php $content->getString("submit-button", $db);?>">
		</form>
	</div> 
	<div id="boundary"></div>
</div>
	<div class="hold-info">
	<div class="inline info"> 
	<div class="block-text">
	<p class="text">
				<?php $content->getString("home-1", $db);?>		
	   </p>
			</div>
			</div>
			<div class="inline info">
			<div class="block-text">
				<p class="text">
				<?php $content->getString("home-2", $db);?>		
				</p>
				</div>
			</div>
			<div  class="inline info">
			<div class="block-text">
				<p class="text">
				<?php $content->getString("home-3", $db);?>		
					
				</p>
				</div>
				</div>
				</div>
			</div>
<footer>
<?php If(file_exists('imprint.php')){?><a href="imprint.php">Imprint/Impressum</a> | <?php } ?>Proudly powered by <a href="http://shmy.li">SHortMYLInk</a> | <!-- DONT REMOVE THE FOLLOWING LINK!-->Impressed by <a href="http://www.thierryli.com/">www.thierryli.com</a> - Thanks :)
</footer>	
</body>
</html>
