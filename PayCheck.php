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
<style>
    /* Styles for html */
    body{
        background-color: #808080;
    }

    section{
        background-color: rgb(105,105,105);
        border-radius: 100px;
    }

    #div1{
        border-radius: 100px;
    }

    #p1{
        text-align: center;
    }

    form{
        text-align: center;
    }

    .button{
        background: rgb(60,179,113);
        text-align: center;
        padding: 10px 50px;
    }
</style>
    <section>
        <?php
        //Getting stuff from HTML
        $hourWorked = $_POST['work'];
        $wage = $_POST['wage'];
        $pastLim = ($hourWorked - 40) * ($wage / 2);

        if (!is_numeric($hourWorked) && !is_numeric($wage)) {
            //Tests if real number or letter
            echo "<p id='p1'>Please enter a real number</p>";
        }
        else{
            if (empty($hourWorked) && empty($wage)) {
                //If the hours worked and the wage is empty...
                echo "<p id='p1'>Please click the back button and enter the hours worked and the wage.</p>";
            } else if (empty($hourWorked)){
                //If teh hours worked is empty...
                echo "<p id='p1'>Please click the back button and enter the hours you have worked.</p>";
            } else if (empty($wage)){
                //if the wage is empty
                echo "<p id='p1'>Please click the back button and enter the wage.</p>";
            } else if (is_numeric($hourWorked) && is_numeric($wage)){
                //If hoursworked and wage is filled out.
                if ($hourWorked > 40) {
                    //If hours are more then 40...
                    $overtime = number_format((($hourWorked * $wage) + ($pastLim)), 2);
                    echo "<p id='p1'>You were paid \$$overtime for your work</p>" . "<br>";
                } else {
                    //If hours are less then 40...
                    $normal = $wage * $hourWorked;
                    echo "<p id='p1'>You were paid \$$normal for your work</p>" . "<br>";
                }
            } else {
                echo "<p id='p1'>Please don't combine numbers and letters</p>";
            }
        }
        ?>
    <form action="PayCheck.html"><input type="submit" name="back" value="Back" class="button"></form>
    </section>
</body>
</html>