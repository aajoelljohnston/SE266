<?php
	// Get information from the form
$survey_id = $_POST['survey_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$student_type = $_POST['student_type'];
$gender = $_POST['gender'];
$degree = $_POST['degree'];
$job = $_POST['job'];
$favorite_classes = $_POST['favorite_classes'];
$comments = $_POST['comments'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>2015 Software Engineering Survey</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
    <div id="content">
        <h1>2015 Software Engineering Survey</h1>

        <label>First Name:</label>
        <span><?php echo $first_name; ?></span><br />

        <label>Last Name:</label>
        <span><?php echo $last_name; ?></span><br />

        <label>Student Type:</label>
        <span><?php echo $student_type; ?></span><br />

        <label>Gender:</label>
        <span><?php echo $gender; ?></span><br />

        <label>Degree:</label>
        <span><?php echo $degree; ?></span><br />

        <label>Job:</label>
        <span><?php echo $job; ?></span><br />

        <label>Favorite Classes:</label>
        <span><?php echo $favorite_classes; ?></span><br />

        <label>Comments:</label>
        <span><?php echo $comments; ?></span><br />

        <p>&nbsp;</p>
    </div>
</body>
</html>