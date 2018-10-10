<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Two Trains</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <h2>Two Trains</h2>
    <form action="TwoTrains.php" method="post">
        <input type="text" placeholder="Train A's speed" name="trainA">
        <input type="text" placeholder="Train B's speed" name="trainB">
        <input type="text" placeholder="The train's distance appart" name="distance">
        <input type="submit" value="Submit">
    </form>
    <?php
    // Global Variables
        $nothing = null;
        $speedA = $_POST['trainA'];
        $speedB = $_POST['trainB'];
        $distance = $_POST['distance'];

        //Calculations
        $distanceA = (($speedA / $speedB) * $distance) / (1+ ($speedA / $speedB));
        $distanceB = $distance - $distanceA;
        $timeA = $distanceA / $speedA;
        $timeB = $distanceB / $speedB;

        echo "$speedA";
        echo "$speedB";
        echo "$distance";


    ?>
</body>
</html>