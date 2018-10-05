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

    #div1{
        border-radius: 100px;
    }

    h2{
        text-align: center;
        background: rgb(60,179,113);
        margin-bottom: 0px;
        padding: 1.1em;
        border-radius: 100px 100px 0px 0px;
    }

    form{
        background-color: rgb(105,105,105);
        margin-top: 0px;
        border-radius: 0px 0px 100px 100px;
    }

    #p1{
        text-align: center;
        margin-top: 0px;
    }

    #p2{
        text-align: center;
    }

    #div2{
        text-align: center;
    }

    p{
        margin-bottom: 0px;
        background: rgb(105,105,105);
        padding-bottom: 0px;
    }

    .button{
        background: rgb(60,179,113);
    }
</style>
    <?php
    //Getting stuff from HTML
        $hourWorked = $_POST['work'];
        $wage = $_POST['wage'];
        $pastLim = ($hourWorked - 40) * ($wage / 2);


        if ($hourWorked > 40) {
            //If hours are more then 40...
            $overtime = number_format((($hourWorked * $wage) + ($pastLim)), 2);
            echo "<p>You were paid $overtime for your work</p>" . "<br>";
        } else {
            //If hours are less then 40...
            $normal = $wage * $hourWorked;
            echo "<p>You were paid $normal for your work</p>" . "<br>";
        }
    ?>
    <form action="PayCheck.html"><input type="submit" name="back" value="Back" class="button"></form>
</body>
</html>