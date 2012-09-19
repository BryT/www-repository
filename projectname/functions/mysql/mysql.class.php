<?php
	class mysql {
		private static $host = "";
		private $username = "";
		private $password = "";
		private $db = "";
		
		public static function sanitize($str){
			$conn = mysql_connect(self::$host,self::$username,self::$password);
			return mysql_real_escape_string($str);
			mysql_close($conn);
		}
		
		public static function sql($sql,$db='',$host='',$username='',$password=''){
			if ($sql = '' | !is_string($sql)){
				die('SQL ERROR: A string is expexted, none given.');
			}
			if ($db == ''){
				$db = self::$db;
			}
			if ($host == ''){
				$host = self::$host;
			}
			if ($username == ''){
				$username = self::$username;
			}
			if ($password == ''){
				$password = self::$password;
			}
			$conn = mysql_connect($host,$username,$password);
			mysql_select_db($db,$conn);
			return mysql_query($sql,$conn);
			mysql_close($conn);
		}
	}
?>
