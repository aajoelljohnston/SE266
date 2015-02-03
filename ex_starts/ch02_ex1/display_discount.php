<?php
	// Get information from the form
	$product_description = $_POST ['product_description'];
	$list_price = $_POST ['list_price'];
	$discount_percent = $_POST ['discount_percent'];

	// Calculate the discounted amount and price
	$discount = $list_price * $discount_percent * .01;
	$discount_price = $list_price - $discount;

	// Format numeric variables with the currency and percentage formats
	$list_price_formatted_data = "$" .number_format($list_price, 2);
	$discount_percent_formatted_data = $discount_percent. "%";
	$discount_formatted_data = "$" .number_format($discount, 2);
	$discount_price_formatted_data = "$" .number_format($discount_price, 2);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
    <div id="content">
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description; ?></span><br />

        <label>List Price:</label>
        <span><?php echo $list_price_formatted_data; ?></span><br />

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent_formatted_data; ?></span><br />

        <label>Discount Amount:</label>
        <span><?php echo $discount_formatted_data; ?></span><br />

        <label>Discount Price:</label>
        <span><?php echo $discount_price_formatted_data; ?></span><br />

        <p>&nbsp;</p>
    </div>
</body>
</html>