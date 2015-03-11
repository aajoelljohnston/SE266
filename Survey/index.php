<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>2015 Software Engineering Survey</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <div id="content">
    <h1>2015 Software Engineering Survey</h1>
	<h2>Created by Ashlye Joell - Johnston</h2>
	<p>Please complete the survey below. Note: All questions need a response.</p>
    <form action="add_survey.php" method="post" id="add_survey_form">

    <fieldset>
    <legend>Personal Information</legend>
        <label>First Name:</label>
        <input type="text" name="first_name" value="" class="textbox"/>
        <br />
		
		<label>Last Name:</label>
        <input type="text" name="last_name" value="" class="textbox"/>
        <br />
		
		<label>Student Type:</label>
        <select name="student_type">
                <option value="American Student">American Student</option>
                <option value="International Student">International Student</option>
                <option value="Foreign Exchange Student">Foreign Exchange Student</option>
        </select>
		<br />

		<label>Gender:</label>
        <input type="radio" name="gender" value="Male" />
        Male
        <input type="radio" name="gender" value="Female" />
        Female<br />	
    </fieldset>

    <fieldset>
    <legend>SE Survey Questions</legend>

        <p>Please select the degree you are currently enrolled in?</p>
        <input type="radio" name="degree" value="Associates Degree" />
        Associates Degree<br />
        <input type="radio" name="degree" value="Bachelors Degree" />
        Bachelors Degree<br />
		
        <p>Upon completion of your program what position do you wish to apply for?</p>
        <input type="radio" name="job" value="Computer System Developer" />
        Computer System Developer
        <input type="radio" name="job" value="Computer Analyst" />
        Computer Analyst
		<input type="radio" name="job" value="Computer Programmer" />
        Computer Programmer
        <input type="radio" name="job" value="Computer Database Specialist" />
        Computer Database Specialist<br />
        <input type="radio" name="job" value="Computer Software Engineer" />
        Computer Software Engineer
        <input type="radio" name="job" value="Web Programmer" />
        Web Programmer
		<input type="radio" name="job" value="Planner or Developer" />
        Planner or Developer
		<br />
	</fieldset>
	
    <fieldset>
    <legend>What are your favorite SE Classes?</legend>

        <input type="checkbox" name="favorite_classes" value = "C++"/>C++
        <input type="checkbox" name="favorite_classes" value = "C#"/>C#
        <input type="checkbox" name="favorite_classes" value = "PHP and MySQL"/>PHP and MySQL
        <input type="checkbox" name="favorite_classes" value = "XHTML"/>XHTML<br />
        <input type="checkbox" name="favorite_classes" value = "Java"/>Java
        <input type="checkbox" name="favorite_classes" value = ".NET"/>.NET
        <input type="checkbox" name="favorite_classes" value = "Javascript"/>Javascript
        <input type="checkbox" name="favorite_classes" value = "SQL"/>SQL<br />
	</fieldset>

        <p>How can we make your NEIT experience better?</p>
        <textarea name="comments" rows="4" cols="50"></textarea>
    </fieldset>
	<br />
		
    <input id ="add_survey_button" type="submit" value="Submit" />

    </form>
    <br />
    </div>
</body>
</html>