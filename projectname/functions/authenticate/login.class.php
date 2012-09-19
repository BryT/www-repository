<?php
	class login extends mysql {
		public static function attempt($username,$password,$group = array("user")){
			// Magic
			
		}
	}
	function is_logged_in($group = "user"){
		if (isset($_SESSION['logged_in']) && isset($_SESSION['group']) && $_SESSION['group'] == $group){
			return true;
		} else {
			return false;
		}
	}
?>
