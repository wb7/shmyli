<?php

	function checkUpdates($package){
	
		//Get file
	
			If($handle = ftp_connect("ftp.lg-server.de")){
			ftp_login($handle, "packages", "packages");
			ftp_get($handle, $package . "_update.zip", "update.zip", FTP_BINARY);}else{echo "Error! Please report this bug on bugs.lg-server.de!";}
	
		//Unzip
	
		if(is_file($package . "_update.zip")){
			$zip = zip_open($package . "_update.zip");
			while($read = zip_read($zip)){
				$content = zip_entry_read($read);
				$name = zip_entry_name($read);
				$path = dirname($name);
				if(!is_dir($path)){
					mkdir($path);
					$handle = fopen($name, "w+");
					fwrite($handle, $content);
					fclose($handle);
				}
	}
?>