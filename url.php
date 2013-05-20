<?php
include('inc/sql.php');

function getString($length = 6)
{
    $chars = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
     
    $string = '';
	
    $num_chars = strlen($chars);
	
    for($i=0; $i<$length; $i++){
	
        $string .= $chars[mt_rand(0, $num_chars - 1)];
		
    }
	
    return $string;
}

If (isset($_GET['url'])){

	If (!empty($_GET['url'])){
	
		$temp = getString();
		
		$exists = $db->query("SELECT `short` FROM `links` WHERE `url` = '" . mysqli_real_escape_string($db, $_GET['url']) . "';");
		
		If ($exists->num_rows > 0){
			
			$array = $exists->fetch_array();
			$temp = $array[0];
			
		}else{
		
			$result = $db->query("SELECT * FROM `links` WHERE `short` = '" . $temp . "';");

			while($result->num_rows > 0){

				$temp = getString();
				GLOBAL $temp;

			}

			$db->query("INSERT INTO `links` (`short`, `url`) VALUE ('" . $temp . "', '" . mysqli_real_escape_string($db, $_GET['url']) . "');");
		
		}

		echo $config['domain'] . "/" . $temp;
		
	}
}
?>