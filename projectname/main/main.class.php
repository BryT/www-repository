<?php
	session_start();
	
	define('RENDER_START',microtime(true));
	
	class projectname {
		// Public variables about the project
		public static $version = "0";
		public static $name = "Alpha";
		public static $release = "Sept. 19, 2012";
		public static $info = "Alpha Testing";
		
		public static $path = "/home/patrick/repo/projectname";
		
		public static function main(){
			// Requires various function files when this method is called
			$function_array = array(	"/errorhandler/errorhandler.class.php",
							"/mysql/mysql.class.php",
							"/authenticate/login.class.php",
							"/template/template.class.php");
			
			foreach ($function_array as $file){
				require(self::$path."/functions".$file);
			}
		}
	}
?>
