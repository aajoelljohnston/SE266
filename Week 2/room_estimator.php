<?php
	// Get the data from the form
	$width_wall1 = $_POST['width_wall1'];
	$height_wall1 = $_POST['height_wall1'];
	$length_wall2 = $_POST['length_wall2'];
	$height_wall2 = $_POST['height_wall2'];
	$length_ceiling = $_POST['length_ceiling'];
	$width_ceiling = $_POST['width_ceiling'];

	// validate Width of Wall 1 Entry
    if ( empty($width_wall1) ) {
        $error_message = 'Width of Wall 1 is a required field.'; }
    else if ( !is_numeric($width_wall1) )  {
        $error_message = 'Width of Wall 1 must be a valid number.'; }
    else if ( $width_wall1 <= 0 ) {
        $error_message = 'Width of Wall 1 must be greater than zero.'; }

	// validate Height of Wall 1 Entry
    else if ( empty($height_wall1) ) {
        $error_message = 'Height of Wall 1 is a required field.'; }
    else if ( !is_numeric($height_wall1) )  {
        $error_message = 'Height of Wall 1 must be a valid number.'; }
    else if ( $height_wall1 <= 0 ) {
        $error_message = 'Height of Wall 1 must be greater than zero.'; }

	// validate Length of Wall 2 Entry
    else if ( empty($length_wall2) ) {
        $error_message = 'Length of Wall 2 is a required field.'; }
    else if ( !is_numeric($length_wall2) )  {
        $error_message = 'Length of Wall 2 must be a valid number.'; }
    else if ( $length_wall2 <= 0 ) {
        $error_message = 'Length of Wall 2 must be greater than zero.'; }

	// validate Height of Wall 2 Entry
    else if ( empty($height_wall2) ) {
        $error_message = 'Height of Wall 2 is a required field.'; }
    else if ( !is_numeric($height_wall2) )  {
        $error_message = 'Height of Wall 2 must be a valid number.'; }
    else if ( $height_wall2 <= 0 ) {
        $error_message = 'Height of Wall 2 must be greater than zero.'; }

	// validate Length of Ceiling Entry
    else if ( empty($length_ceiling) ) {
        $error_message = 'Length of Ceiling is a required field.'; }
    else if ( !is_numeric($length_ceiling) )  {
        $error_message = 'Length of Ceiling must be a valid number.'; }
    else if ( $length_ceiling <= 0 ) {
        $error_message = 'Length of Ceiling must be greater than zero.'; }

	// validate Width of Ceiling Entry
    else if ( empty($width_ceiling) ) {
        $error_message = 'Width of Ceiling is a required field.'; }
    else if ( !is_numeric($width_ceiling) )  {
        $error_message = 'Width of Ceiling must be a valid number.'; }
    else if ( $width_ceiling <= 0 ) {
        $error_message = 'Width of Ceiling must be greater than zero.'; }

    // Set error message to empty string if no invalid entries
    else {
        $error_message = ''; }

    // If an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit();
    }

	// Calculate the volume in cubic feet and square footage of paintable space
	$volume = $width_wall1 * $length_wall2 * $height_wall1;
	$paintable_space_wall1 = $width_wall1 * $height_wall1 * 2;
	$paintable_space_wall2 = $length_wall2 * $height_wall2 * 2;
	$paintable_space_ceiling = $length_ceiling * $width_ceiling;
	$total_squarefeet_Paintable_space = $paintable_space_wall1 + $paintable_space_wall2 + $paintable_space_ceiling;

	//Apply formatting to measurments
	$volume_formatted = $volume." Cubic Feet";
	$paintable_space_wall1_formatted = $paintable_space_wall1." Square Feet";
	$paintable_space_wall2_formatted = $paintable_space_wall2." Square Feet";
	$paintable_space_ceiling_formatted = $paintable_space_ceiling." Square Feet";
	$total_squarefeet_Paintable_space_formatted = $total_squarefeet_Paintable_space." Square Feet";
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Room Estimator</title>
</head>
<body>
    <div id="content">
        <h1>Room Estimator</h1>

        <label>Volume of Room:</label>
        <span><?php echo $volume_formatted; ?></span><br />

        <label>Paintable Space of Wall 1:</label>
        <span><?php echo $paintable_space_wall1_formatted; ?></span><br />

        <label>Paintable Space of Wall 2:</label>
        <span><?php echo $paintable_space_wall2_formatted; ?></span><br />

        <label>Paintable Space of Ceiling:</label>
        <span><?php echo $paintable_space_ceiling_formatted; ?></span><br />

        <label>Total Square Feet of Paintable Space:</label>
        <span><?php echo $total_squarefeet_Paintable_space_formatted; ?></span><br />

        <p>&nbsp;</p>
    </div>
</body>
</html>