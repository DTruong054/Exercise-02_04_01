<!DOCTYPE html>
<html>
<!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: NumberForm.php -->

<head>
    <meta charset="utf-8" />
    <title>Number Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Number Form</h2>
    <?php
    //To display or not display
    $displayForm = true;
    $number = "";
    
    if (isset($_POST['submit'])) {
        $number = $_POST['number'];
        if (!is_numeric($number)) {
            //If not numeric
            echo "<p>You need to enter a numeric value</p>\n";
            $displayForm = true;
        } else {
            //If numeric
            $displayForm = false;
        }
    }

    if ($displayForm) {
        ?>
        <form name="numberForm" action="Numberform.php" method="POST">
            <p>Enter a number: <input type="text" name="number" value="<?php echo "$number"; ?>" ></p>
            <p><input type="reset" value="Clear Form"&nbsp;&nbsp;> <input type="submit" name="submit" value="Send Form"></p>
        </form>
        <?php
    } else{
        echo "<p>Thanks for entering a number.</p>\n";
        echo "<p>Your number, $number, squared is " . ($number * $number) . "</p>\n";
        echo "<p><a href= \"Numberform.php\">Try again?</a></p>\n";
    }
    
    ?>
</body>

</html>