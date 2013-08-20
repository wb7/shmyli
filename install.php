<?php
error_reporting(0);
If ($_POST['host'] AND $_POST['user'] AND $_POST['database']){

	//WRITE
	
		$file = fopen("inc/conf.inc.php", "w");
		fwrite($file, "<?php\n\$dbhost = \"" . $_POST['host'] . "\";\r\n\$dbuser = \"" . $_POST['user'] . "\";\r\n\$dbpw = \"" . $_POST['password'] . "\";\r\n\$database = \"" . $_POST['database'] . "\";\r\n\r\n\$config = array(\r\n\t\"domain\" => \"" . $_POST['domain'] . "\",\r\n\t\"navigation\" => \"yes\",\r\n);\r\n?>");
		fclose($file);
	
	//QUERY
	
		include('inc/sql.php');
		
			$db->query("CREATE TABLE IF NOT EXISTS `content` (
			  `id` int(11) NOT NULL AUTO_INCREMENT,
			  `keyword` varchar(255) NOT NULL,
			  `content` text NOT NULL,
			  PRIMARY KEY (`id`)
			) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;");

			$db->query("INSERT INTO `content` (`id`, `keyword`, `content`) VALUES
			(3, '404-text', 'Error 404 - not found! :('),
			(1, 'page-title', 'shmyli'),
			(2, '404-title', '404 - Not found :/'),
			(4, 'what-title', 'What!?'),
			(5, 'what-text', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.'),
			(6, 'who-title', 'Who!?'),
			(7, 'who-text', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.'),
			(8, 'why-title', 'Why!?'),
			(9, 'why-text', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.'),
			(10, 'textfield', 'Long link...'),
			(11, 'submit-button', 'Generate!'),
			(12, 'home-1', 'Lorem ipsum dolor sit amet,<br />\nconsetetur sadipscing elitr,<br />\nsed diam nonumy eirmod tempor<br />\ninvidunt ut labore et dolore<br />\nmagna aliquyam Lorem ipsum'),
			(13, 'home-2', 'Lorem ipsum dolor sit amet,<br />\nconsetetur sadipscing elitr,<br />\nsed diam nonumy eirmod tempor<br />\ninvidunt ut labore et dolore<br />\nmagna aliquyam Lorem ipsum'),
			(15, 'imprint-title', 'Imprint'),
			(16, 'imprint-text', 'Your imprint goes here.'),
			(14, 'home-3', 'Lorem ipsum dolor sit amet,<br />\nconsetetur sadipscing elitr,<br />\nsed diam nonumy eirmod tempor<br />\ninvidunt ut labore et dolore<br />\nmagna aliquyam Lorem ipsum'),
			(17, 'invalid-url', 'Oops...this URL was not valid.');");

			$db->query("CREATE TABLE IF NOT EXISTS `links` (
			  `id` int(11) NOT NULL AUTO_INCREMENT,
			  `short` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
			  `url` text COLLATE utf8_unicode_ci NOT NULL,
			  PRIMARY KEY (`id`)
			) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;");

			$db->query("INSERT INTO `links` (`id`, `short`, `url`) VALUES (1, 'wb7', 'http://wb7.eu');");
			unlink("installation");
			header("Location: index.php");
}

?>

<h1>Database and domain where shmyli should be reachable</h1>
<form action="" method="post">
	<input type="text" name="host" placeholder="Host"><br />
	<input type="text" name="user" placeholder="User"><br />
	<input type="password" name="password" placeholder="Password"><br />
	<input type="text" name="database" placeholder="Database"><br />
	<input type="text" name="domain" placeholder="Domain"><br />
	<input type="submit">
</form>
