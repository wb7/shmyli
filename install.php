<?php
error_reporting(0);
If ($_POST['host'] AND $_POST['user'] AND $_POST['password'] AND $_POST['database']){

	//WRITE
	
		If (file_exists("inc/conf.inc.php")){
			unlink("inc/conf.inc.php");
		}
		$file = fopen("inc/conf.inc.php", "a");
		fwrite($file, "<?php\n\$dbhost = \"" . $_POST['host'] . "\";\r\n\$dbuser = \"" . $_POST['user'] . "\";\r\n\$dbpw = \"" . $_POST['password'] . "\";\r\n\$db = \"" . $_POST['database'] . "\";\n?>");
		fclose($file);
	
	//QUERY
	
		include('inc/sql.php');
		
			//ToDo: Insert Query
		
}

?>

<form action="" method="post">
	<input type="text" name="host" placeholder="Host"><br />
	<input type="text" name="user" placeholder="User"><br />
	<input type="password" name="password" placeholder="Password"><br />
	<input type="text" name="database" placeholder="Database"><br />
	<input type="submit">
</form>