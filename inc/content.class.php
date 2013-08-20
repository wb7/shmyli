<?php

class content{

	public function getString($what, $db){
	
		$result = $db->query("SELECT * FROM `content` WHERE `keyword` = '" . mysqli_real_escape_string($db, $what) . "' LIMIT 1;");
		
		If ($result->num_rows == 1){
		
			while ($row = $result->fetch_object()){
				
					echo $row->content;
				
			}
		
		}else{echo "Uhh. ERROR: Check your language variables.";}
	
	}

	public function install($lang){
		
		//If (file_exists())	
		
	}

}

$content = new content;

echo dirname(__FILE__);

?>