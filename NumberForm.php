<!doctype html>
<!--
Exercise 02_04_01
Author: Mario Sandoval
Date: 09.25.2018
NumberForm.php

-->
<html>
	<head>
		<title>Number Form</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
<h2>Number Form</h2>
<?php
        // variable
       $displayForm = true;
        // tracks the input
        $number = "";
        // if state to determine if we got here based on a form submit
        if(isset($_POST['submit'])) {
            $number = $_POST['number'];
            // if it is numeric successful
            if (is_numeric($number)) {
                // code to not display the form again 
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
            <form name="numberForm" action="NumberForm.php" method="post">
            <p>
                Enter a number: <input type="text" name="number" value="<?php echo $number; ?>">
            </p>
            <p>
                <input type="reset" value="Clear Form">&nbsp;&nbsp;
                <input type="submit" name="submit" value="Send Form">
            </p>
            </form>
            <?php
        }
        else {
          echo "<p>Thank you for entering a number.</p>\n";
            echo "<p>Your numer, $number, squared is " . ($number * $number) . ".</p>\n";
            echo "<p><a href=\"NumberForm.php\">Try again?</a><p>\n";
        }
        ?>
	</body>
</html>