<?php

	If(isset($_GET['short'])){
		If ($_GET['short'] != ""){

			include('inc/sql.php');
		
			$result = $db->query("SELECT * FROM `links` WHERE `short` = '" . mysqli_real_escape_string($db, $_GET['short']) . "';");
			
			If ($result->num_rows > 0){
			
				while ($row = $result->fetch_object()){
				
					header("Location: " . $row->url);
				
				}
				
			}else{include('404.php');}

			$result->close();
			$db->close();
			
		}else{include('home.php');}
	}else{include('home.php');}
?>