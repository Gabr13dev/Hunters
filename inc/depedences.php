<?php
$files_array = ["css/bootstrap.min.css","css/bootstrap.css","css/bootstrap-grid.css","css/bootstrap-grid.min.css","css/bootstrap-reboot.css","css/persona.css","css/hltv.css"];
	foreach ($files_array as $archive) {
		$a = protocol.$_SERVER['SERVER_NAME']."/".pasta."/".$archive;
		print_r('<link rel="stylesheet" type="text/css" href="'.$a.'">');
	}



