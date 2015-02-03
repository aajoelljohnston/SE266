<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Room Estimator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <div id="content">
    <h1>Room Estimator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php } // end if ?>
    <form action="room_estimator.php" method="post">

        <div id="data">

            <label>Width Wall 1:</label>
            <input type="text" name="width_wall1"
                   value="<?php echo $width_wall1; ?>"/><br />

            <label>Height Wall 1:</label>
            <input type="text" name="height_wall1"
                   value="<?php echo $height_wall1; ?>"/><br />
			
			<label>Length Wall 2:</label>
            <input type="text" name="length_wall2"
                   value="<?php echo $length_wall2; ?>"/><br />
			
            <label>Height Wall 2:</label>
            <input type="text" name="height_wall2"
                   value="<?php echo $height_wall2; ?>"/><br />
			
			<label>Length Ceiling:</label>
            <input type="text" name="length_ceiling"
                   value="<?php echo $length_ceiling; ?>"/><br />

            <label>Width Ceiling:</label>
            <input type="text" name="width_ceiling"
                   value="<?php echo $width_ceiling; ?>"/><br />
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/><br />
        </div>

    </form>
    </div>
</body>
</html>