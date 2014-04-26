<?php

class Analysis {
	
	public function generate_parameters($filter="") {
		// Log Activity
		MVC::log(" - Creating view model for Analysis.", 6);
		
		// Get Listing Data
		$factory = new StatementLine();
		$items = $factory->get("active = 1");
		
		// Create Lisitng
		$listing = "";
		foreach ($items as $item) {
			$listing .= "
			<tr>
				<td>{$item->uid}</td>
				<td>{$item->date}</td>
				<td>{$item->description}</td>
				<td>{$item->amount}</td>
				<td>" . $item->category_badge() . "</td>
			</tr>
			";
		}
		
		// Compile Array
		$arr = array();
		$arr['listing'] = $listing;
		MVC::log(print_r($arr, 1));
		
		// Return Array
		return $arr;
	}
	
}
