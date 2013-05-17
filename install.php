<?php
error_reporting(0);
If ($_POST['host'] AND $_POST['user'] AND $_POST['password'] AND $_POST['database']){

	//WRITE
	
		If(file_exists("inc/conf.inc.php")){
			unlink("inc/conf.inc.php");
		}
		$file = fopen("inc/conf.inc.php", "a");
		fwrite($file, "<?php\n\$dbhost = \"" . $_POST['host'] . "\";\n\$dbuser = \"" . $_POST['user'] . "\";\n\$dbpw = \"" . $_POST['password'] . "\";\n\$db = \"" . $_POST['database'] . "\";\n?>");
		fclose($file);
	
	//QUERY
	
		include('inc/sql.php');
		$db->("CREATE TABLE IF NOT EXISTS `content` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `keyword` varchar(255) NOT NULL,
		  `content` text NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17;");


		$db->query("INSERT INTO `content` (`id`, `keyword`, `content`) VALUES
		(1, 'page-title', 'urlShortener'),
		(2, '404-title', '404 - Not found :/'),
		(3, '404-text', 'Error 404 - not found! :('),
		(4, 'what-title', 'What!?'),
		(5, 'what-text', '[TEXT WHAT]'),
		(6, 'who-title', 'Who!?'),
		(7, 'who-text', '[TEXT WHO]'),
		(8, 'why-title', 'Why!?'),
		(9, 'why-text', '[TEXT WHY]'),
		(10, 'textfield', 'Long link...'),
		(11, 'submit-button', 'Generate!'),
		(12, 'home-1', 'Lorem ipsum dolor sit amet,<br />\r\nconsetetur sadipscing elitr,<br />\r\nsed diam nonumy eirmod tempor<br />\r\ninvidunt ut labore et dolore<br />\r\nmagna aliquyam Lorem ipsum<br />'),
		(13, 'home-2', '...und sonstiger, langer, sinnloser, genialer, nicht ben&ouml;tigter Text.'),
		(14, 'home-3', 'Lorem ipsum dolor sit amet,<br />\r\nconsetetur sadipscing elitr,<br />\r\nsed diam nonumy eirmod tempor<br />\r\ninvidunt ut labore et dolore<br />\r\nmagna aliquyam Lorem ipsum<br />'),
		(15, 'imprint-title', 'IMPRINT'),
		(16, 'imprint-text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra, nunc eu aliquam varius, quam ligula sollicitudin est, in commodo nibh dui ut urna. Etiam non commodo purus. Sed aliquam, massa a laoreet consequat, tortor mi bibendum justo, a pellentesque risus felis et lorem. Donec id ornare dui. Donec id odio ante, non lobortis neque. Proin viverra quam a leo fermentum suscipit. Quisque non nisi lectus, quis hendrerit nibh. Duis dapibus ornare mollis. Nam massa libero, bibendum non porta commodo, porttitor in ante. Proin ultricies fringilla diam nec vehicula.\n\nVestibulum cursus nisi sit amet metus porttitor nec rutrum lorem viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pellentesque, mi auctor viverra tincidunt, purus libero aliquam justo, nec lacinia ante felis nec odio. Praesent convallis pretium neque et vulputate. Curabitur cursus porttitor tortor, vel tempor neque faucibus eget. Mauris commodo, neque nec ornare fermentum, tortor nisl tempor magna, in venenatis leo urna eget purus. Donec id ipsum urna, ac egestas dui. Mauris vel dui dui. Sed sed purus metus.\n\nAliquam at diam sed ante volutpat varius non vel purus. Suspendisse potenti. Aenean tempor tincidunt quam sodales blandit. Morbi nec lectus quis leo faucibus ultrices. In hac habitasse platea dictumst. Sed euismod sapien sollicitudin eros sollicitudin non cursus sem viverra. Vestibulum id lorem nulla. Aenean enim tortor, porttitor non egestas a, tristique vel metus. Nulla auctor est at risus bibendum iaculis. Phasellus vitae nunc libero, a posuere est. Etiam ultricies gravida justo, quis pellentesque eros gravida vel. Pellentesque in nisi velit. Vestibulum egestas sem vel leo porta laoreet.\n\nUt sed egestas velit. In hac habitasse platea dictumst. Nunc at cursus leo. Nam dui elit, accumsan et ullamcorper imperdiet, fermentum quis ipsum. Etiam felis neque, ultrices ac luctus ut, iaculis in velit. Aliquam venenatis euismod orci, ut tincidunt urna consequat eget. Sed viverra quam non purus bibendum laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus vehicula felis eget leo pellentesque et sagittis quam rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sagittis suscipit mi a dictum. Ut felis dolor, auctor a adipiscing eget, lacinia consequat tortor. Nullam convallis neque a enim condimentum in sollicitudin velit aliquet. Curabitur ac lacus pretium felis varius adipiscing.\n\nDonec convallis mauris sed diam aliquet nec dapibus nibh pellentesque. Cras nec nisl lorem. Cras a ipsum sit amet enim tincidunt mattis id at diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In metus risus, sollicitudin non cursus vitae, tristique vel sapien. Sed non urna eget libero pellentesque auctor non sed tellus. Fusce volutpat orci id tortor congue adipiscing. Suspendisse nec risus eu ante pharetra elementum gravida et massa. Proin ornare bibendum varius. Sed vel dolor massa. Cras facilisis mollis ullamcorper. Mauris vel dolor sapien, tristique facilisis nulla.\n\nNam commodo mollis aliquam. Morbi elementum tellus at sapien vestibulum sed elementum felis molestie. Sed tincidunt leo vel est gravida egestas. Integer ultrices sodales mollis. Pellentesque nec vulputate magna. Nam id lorem ac magna volutpat pellentesque. Nulla in arcu felis, tincidunt pulvinar est. Nunc varius enim accumsan dui laoreet gravida. Nam eleifend facilisis interdum. In eu sollicitudin orci. In placerat, erat at volutpat bibendum, nisi odio scelerisque mi, sit amet pulvinar felis ipsum et magna. Mauris non imperdiet purus. Donec a lacinia tortor. Duis pulvinar arcu ut arcu porta ornare.\n\nMauris pretium risus in felis vestibulum sit amet varius urna vestibulum. Nullam ultrices placerat tristique. Quisque ullamcorper rutrum purus ac viverra. Suspendisse a metus at sem aliquam auctor nec quis eros. Quisque eget est enim, ut tristique nisi. Ut nec ornare massa. Proin laoreet erat at augue iaculis fermentum. Aliquam mattis elit et justo elementum tempus. Etiam aliquam tempor elit, at consequat nunc mattis nec.\n\nDonec quis nisi a dolor eleifend lacinia ac bibendum turpis. Donec gravida dolor adipiscing enim volutpat dignissim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque tincidunt vestibulum ante et aliquet. Phasellus vel magna sit amet lorem elementum congue. Maecenas accumsan quam a metus iaculis condimentum. Pellentesque ornare placerat mi, vel ullamcorper diam viverra ac. Cras tempus, nunc eget blandit accumsan, magna lacus bibendum velit, non accumsan nibh odio id velit. Cras aliquet dui eu massa tempus in facilisis dolor volutpat. Duis auctor blandit est, sit amet semper velit dignissim quis. Curabitur convallis, elit at dignissim vestibulum, ipsum massa venenatis eros, at laoreet enim arcu sit amet nisi.\n\nPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla sed elit vel nunc molestie bibendum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam egestas hendrerit iaculis. Ut sed ante nulla, at dapibus erat. Maecenas hendrerit lacinia dolor, vulputate auctor augue tincidunt fringilla. Maecenas at placerat odio. Donec at ipsum non massa faucibus pretium et vel augue. Fusce rhoncus vulputate lorem, in luctus quam suscipit in. Aenean sit amet arcu eu dolor pulvinar aliquam.\n\nMaecenas pretium vestibulum turpis a pellentesque. Morbi diam libero, aliquam nec feugiat ut, egestas ac elit. Aliquam mauris mi, lacinia sed egestas in, porta quis magna. Phasellus in orci nunc. Nullam tempor diam et est porttitor ultrices. Quisque facilisis elementum nisl pharetra rhoncus. Cras condimentum lorem velit, non commodo ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In quis eros mi.');");

		$db->query("CREATE TABLE IF NOT EXISTS `links` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `short` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
		  `url` text COLLATE utf8_unicode_ci NOT NULL,
		  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2;");


		$db->query("INSERT INTO `links` (`id`, `short`, `url`, `title`) VALUES
		(1, 'wb7.eu', 'http://wb7.eu', 'WB7.eu');");
}

?>

<form action="" method="post">
	<input type="text" name="host" placeholder="Host">
	<input type="text" name="user" placeholder="User">
	<input type="password" name="password" placeholder="Password">
	<input type="text" name="database" placeholder="Database">
	<input type="submit">
</form>