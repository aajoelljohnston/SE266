<?php
	
	// Get the Product Data
	$category_id = $_POST['category_id'];
	$name = $_POST['name'];

	//Validate data
	if (empty($name)) {
		$error = "Name field can not be blank. Please insert Name.";
		include('error.php');
	}
	
	// If the name field is not blank add the product to the database
	else {
		require_once('database.php');
		$query = "INSERT INTO categories (categoryName) VALUES ('$name')";
		$db->exec($query);

	// Display the Category List Page
	include('category_list.php');
	}
?>