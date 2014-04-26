<?php

class StatementLine extends Model {
	
	public $statement_id; // (Statement)
	public $date; // (Date)
	public $description; // (String)
	public $amount; // (Decimal)
	public $balance; // (Decimal)
	
	public $category_id; // (Category)
	
	public function category_badge() {
		// Get Category
		$category = new Category($this->category_id);
		
		// Create View
		$view = new View("categories/badge.html", array("name" => $category->name, "id" => $category->uid, "colour" => $category->colour));
		$view->render();
		
		// Return Category Badge
		return $view->html;
	}
	
}

