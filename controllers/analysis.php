<?php

class Controller extends AbstractController {
	
	function display() {
		// Log Activity
		MVC::log(" [*] Analysis");
		
		// Create View
		$view = new View("analysis/display.html", Analysis::generate_parameters());
		
		// Display View
		$view->show();
	}
	
}
