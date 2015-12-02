<?php
include('inc/content.class.php');
include('inc/sql.php');
?>
<html>
<head>
	<title><?php $content->getString("page-title", $db);?> :: <?php $content->getString("404-title", $db);?></title>
	<link rel="stylesheet" href="css/style.css" />
	<meta charset="utf-8">
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

						<?php
						If ($config['navigation'] == "yes"){
							?>

							<ul class="flyout">
								<li><a href="what.php"><?php $content->getString("what-title", $db);?></a></li>
								<li><a href="who.php"><?php $content->getString("who-title", $db);?></a></li>
								<li><a href="why.php"><?php $content->getString("why-title", $db);?></a></li>
							</ul>

							<?php
						}
						?>

					</ul>
				</li>
			</ul>
		</div>
</div>
		<div id="logo">
			<a href="index.php"><img src="img/404.png" class="home" alt="404 :/"/></a>
		</div>
<div id="headline">
		<h1><b><?php $content->getString("404-title", $db);?></b></h1>
	</div> 
	<div id="boundary"></div>
</div>
	<div class="hold-info">
	<div class="inline info"> 
	<div class="info-text">
	<p class="text">
		<?php $content->getString("404-text", $db); ?>
	</p>
			</div>
			</div>
				</div>
			</div>
<footer>
<?php If(file_exists('imprint.php')){?><a href="imprint.php"><?php $content->getString("imprint-title", $db);?></a> | <?php } ?>Proudly powered by <a href="http://shmy.li">SHortMYLInk</a> | <!-- DONT REMOVE THE FOLLOWING LINK!-->Impressed by <a href="http://www.thierryli.com/">www.thierryli.com</a> - Thanks :)
</footer>	
</body>
</html>
