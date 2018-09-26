<!DOCTYPE html>
<html>
<!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: ProcessScholarship.php -->

<head>
    <meta charset="utf-8" />
    <title>ProcessScholarship</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Process Scholarship</h2>
    <?php
    //Track errors
    $errorCount = 0;
    function displayRequired($fieldName)
    {
        echo "The field \"$fieldName\" is requiered!<br>\n";
    }

    function validateInput($data, $fieldName)
    {
        global $errorCount;
        if (empty($data)) {
            //Failure
            displayRequired($fieldName);
            ++$errorCount;
            $returnValue = "";
        } else {
            //Sucssess
            $returnValue = trim($data);
            $returnValue = stripslashes($returnValue);
            return $returnValue;
        }
    }

    //Sticky Form START
    function redisplayForm($firstName, $lastname)
    {
        ?>
    <h2 style="text-align: center">Scholarship Form</h2>
    <form name="scholarship" action="ProcessScholarship2.php" method="POST">
        <p>First Name: <input type="text" name="fName" value=<?php echo $firstName; ?>></p>
        <p>Last Name: <input type="text" name="lName" value=<?php echo $lastname; ?>></p>
        <p>
            <input type="reset" value="Clear Form">&nbsp;&nbsp;
            <input type="submit" value="Send Form">
        </p>
    </form>
    <?php
    }
    //Sticky Form END
    //grab first name and last name
    $firstName = validateInput($_POST['fName'], "First Name");
    $lastname = validateInput($_POST['lName'], "Last Name");
    //validate data
    if ($errorCount > 0) {
        echo "$errorCount error(s): Please re-enter the information below. <br>\n";
        redisplayForm($firstName, $lastname);
    } else {
        echo "Thank you for filling out the scholarship form, " . $firstName . " " . $lastname . ".";
    }
    ?>
</body>

</html>