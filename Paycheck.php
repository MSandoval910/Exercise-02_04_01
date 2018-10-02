<!doctype html>
<!--
Exercise 02_04_01
Author: Mario Sandoval
Date: 09.25.2018
Paycheck.php

-->
<html>
	<head>
		<title>Pay check</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
<h2 style="color: red">Paycheck</h2>
<?php
        // variable
       $displayForm = true;
        // tracks the input
        $number = "";
        $number2 = "";
        $week = "";
        // if state to determine if we got here based on a form submit
        if(isset($_POST['submit'])) {
            $number = $_POST['number'];
            $number2 = $_POST['number2'];
            $week = $_POST['numWeeks'];
            // if it is numeric successful
            if (is_numeric($number)) {
                // code to not display the form again 
                $displayForm = false;
            }
            if(is_numeric($number2)){
                $displayForm = false;
            }
            if(is_numeric($week)){
                $displayForm = false;
            }
            else {
                // failure if it isnt numeric
                echo "<p>You need to enter a numeric value.</p>\n";
                $displayForm = true;
            }
        }
        if ($displayForm) {
            ?>
            <form name="Paycheck" action="Paycheck.php" method="post">
            <p style="color: blue">Number of hours:<br><input type="text" name="number" value="<?php echo $number;?>"></p>
                <p style="color: blue">Hourly Wage:<br><input type="text" name="number2" value="<?php echo $number2; ?>"></p>
                <p style="color: blue">Number of Weeks:<br><input type="text" name="numWeeks" value="<?php echo $week; ?>"></p>
            <p>
                <input type="reset" value="Clear Form">&nbsp;&nbsp;
                <input type="submit" name="submit" value="Send Form">
            </p>
            </form>
            <?php
        }
        else {
            echo "<p>In one week you will earn $" . ($number * $number2) . "</p>\n";
            echo "<p> in $week weeks you will earn $" . ($number * $number2 * $week) . "</p>\n";
            echo "<p><a href=\"Paycheck.php\">Submit another Paycheck?</a><p>\n";
        }
        ?>
	</body>
</html>