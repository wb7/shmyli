<?php

	function checkUpdates($mirror = "http://dl.shmy.li/files/"){
	
		//Get file
	
			If(file_exists("update.zip")){
				unlink("update.zip");
			}
			$handle = fopen("update.zip", "w");
			$content = file_get_contents($mirror . "update.zip");
			fwrite($handle, $content);
			
			unzip("update.zip");
			
	}
	
	//Based on http://de2.php.net/manual/de/ref.zip.php#75079		
	function unzip($src_file) 
	{
	  if ($zip = zip_open($src_file)) 
	  {
		if ($zip) 
		{
		  // For every file in the zip-packet
		  while ($zip_entry = zip_read($zip)) 
		  {
			// Open the entry
			if (zip_entry_open($zip,$zip_entry,"r")) 
			{
			  
			  // The name of the file to save on the disk
			  $file_name = zip_entry_name($zip_entry);
			  // Get the content of the zip entry
			  $fstream = zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));
				If (substr($file_name, -1, 1) != "/"){
					file_put_contents($file_name, $fstream );
					echo "save: ".$file_name."<br />";
				}else{
					If(!file_exists($file_name)){
						mkdir($file_name);
						echo "save: ".$file_name."<br />";
					}
				}
			  
			  // Close the entry
			  zip_entry_close($zip_entry);
			}       
		  }
		  // Close the zip-file
		  zip_close($zip);
		}
	  } 
	  else
	  {
		return false;
	  }
	  return true;
	}

?>