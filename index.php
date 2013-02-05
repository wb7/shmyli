<?php

include('conf.inc.php');

$ergebnis = mysql_query("SELECT * FROM links WHERE short = '" . mysql_real_escape_string($_GET['url']) . "';");
If (mysql_num_rows($ergebnis) != 0){
while($row = mysql_fetch_object($ergebnis))
{
  header("Location: " . $row->url);
}
}else{echo "Not found";}
?>