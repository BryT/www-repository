<?php
	class error {
		public static function set(){
			set_error_handler('error::handler');
		}
		public static function handler($number, $string, $error, $file, $line){
			// Error
			die ("	Error:<br>
				<table border='1'>
					<tr>
						<td>".$number."</td>
						<td>".$string."</td>
						<td>".$error."</td>
						<td>".$file."</td>
						<td>".$line."</td>
					</tr>
				</table><hr>");
		}
	}
	error::set();
?>
