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
    //grab first name and last name
    $firstName = stripslashes($_POST['fName']);
    $lastname = stripslashes($_POST['lName']);
    echo "Thank you for filling out the scholarship form, " . $firstName . ' ' . $lastname . ".";
    ?>
</body>

</html>