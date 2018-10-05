<!DOCTYPE html>
<html>
    <!-- Author: Daniel Truong
    Date: 10.3.18
    FileName: PayCheck.php -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pay Check</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="PayCheck.html"><input type="submit" name="back" value="Back" ></form>
    <?php
    //Getting stuff from HTML
        $hourWorked = $_POST['work'];
        $wage = $_POST['wage'];
        $pastLim = ($hourWorked - 40) * ($wage / 2);


        if ($hourWorked > 40) {
            //If hours are more then 40...
            $overtime = number_format((($hourWorked * $wage) + ($pastLim)), 2) . "<br>";
            echo "$overtime";
        } else {
            //If hours are less then 40...
            $normal = $wage * $hourWorked;
            echo "$normal";
        }
        
    ?>
</body>
</html>