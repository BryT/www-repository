<?php
	require($_SERVER['DOCUMENT_ROOT']."../projectname/main/main.class.php");
	projectname::main();
	
	$title = "this is the title";
	$body = ";cxkvhbjk";
	
	$input = array('title' => $title, 'content' => $body);
	
	template::set($input);
	
	if (is_logged_in('cbacss-ide')){
		// If the one is logged in and a member of the cbacss-ide group
		if (!isset($_GET['ajax'])){
			// If there is not a GET value for ajax
		} else {
			// Do something for the AJAX request
		}
		//setStyle();
	} else if (is_logged_in()){
		// If one is logged in but not a mamber of the cbacss-ide group
		echo "logged in";
	} else {
		// If is not logged in
		//header("Location: ".LOGIN_PAGE_LOCATION);
	}
?>
