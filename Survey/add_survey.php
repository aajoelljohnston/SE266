<?php
// Get the survey data
//$survey_id = $_POST['survey_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$student_type = $_POST['student_type'];
$gender = $_POST['gender'];
$degree = $_POST['degree'];
$job = $_POST['job'];
$favorite_classes = $_POST['favorite_classes'];
$comments = $_POST['comments'];

// Validate inputs
if (empty($first_name) || empty($last_name) || empty($student_type) || empty($gender) || empty($degree) || empty($job) || empty($favorite_classes) || empty($comments) ) {
    $error = "Survey has not been completed. Complete all fields and try again.";
		include('error.php');
} else {
    // If valid, add the survey to the database
    require_once('database.php');
    $query = "INSERT INTO surveys
                 (first_name, last_name, student_type, gender, degree, job, favorite_classes, comments)
              VALUES
                 ('$first_name', '$last_name', '$student_type', '$gender', '$degree', '$job', '$favorite_classes', '$comments')";
   $db->exec($query);
	//echo $query;

    // Display the Survey page
    include('display_index.php');
}
?>