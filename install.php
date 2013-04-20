<?php
error_reporting(0);
If ($_POST['host'] AND $_POST['user'] AND $_POST['password'] AND $_POST['database']){

	//WRITE
		If(file_exists("inc/conf.inc.php")){unlink("inc/conf.inc.php");}
		$file = fopen("inc/conf.inc.php", "a");
		fwrite($file, "<?php\n\$dbhost = \"" . $_POST['host'] . "\";\n\$dbuser = \"" . $_POST['user'] . "\";\n\$dbpw = \"" . $_POST['password'] . "\";\n\$db = \"" . $_POST['database'] . "\";\n?>");
		fclose($file);
	
	//QUERY
		include('inc/sql.php');
		$db->query("CREATE TABLE IF NOT EXISTS `links` (`id` int(11) NOT NULL AUTO_INCREMENT, `short` varchar(255) COLLATE utf8_unicode_ci NOT NULL, `url` text COLLATE utf8_unicode_ci NOT NULL, `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL, PRIMARY KEY (`id`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2;");
		$db->query("INSERT INTO `links` (`id`, `short`, `url`, `title`) VALUES(1, 'wb7.eu', 'http://wb7.eu', 'WB7.eu');");
}

?>

<form action="" method="post">
	<input type="text" name="host" placeholder="Host">
	<input type="text" name="user" placeholder="User">
	<input type="password" name="password" placeholder="Password">
	<input type="text" name="database" placeholder="Database">
	<input type="submit">
</form>