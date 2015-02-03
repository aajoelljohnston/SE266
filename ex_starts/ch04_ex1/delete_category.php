<?php

	// Get IDs
	$category_id = $_POST['category_id'];

	// Delete the product from the DB
	require_once('database.php');
	$query = "DELETE FROM categories WHERE categoryID = '$category_id'";
	$db->exec($query);

	// Display the Product List Page
	include('category_list.php');
?>