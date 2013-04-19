<?php

include('conf.inc.php');

	$result = mysql_query("SELECT * FROM links WHERE short = '" . mysql_real_escape_string($_GET['url']) . "';");
	If (mysql_num_rows($result) != 0){
		while($row = mysql_fetch_object($result))
		{
		  header("Location: " . $row->url);
		}
	}else{echo "Not found";}
?>