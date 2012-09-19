<?php
	class template {
		public static function set($input, $template = ""){
			// Adds default values
			$to_add = array('RENDER_TIME' => (microtime(true) - RENDER_START));
			foreach ($to_add as $key => $val){
				$input[$key] = $val;
			}
			
			if ($template == ""){
				// Default template for said site
				$template = projectname::$path. "/data/".$_SERVER['HTTP_HOST']."/template/default.html";
			} else {
				// Use a template besides the default
				
			}
			
			$template = file_get_contents($template);
			
			foreach($input as $search => $replace){
				$template = str_replace("<!-- {".strtoupper($search)."} -->", $replace, $template);
			}
			echo $template;
		}
	}
?>
