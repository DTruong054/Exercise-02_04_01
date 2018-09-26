<!DOCTYPE html>
<html>
<!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: Super Globals.php -->

<head>
    <meta charset="utf-8" />
    <title>Super Globals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Super Globals</h2>
    <?php
    //This is a test with super global
        echo "<h3>SuperGlobal Array \$_SERVER[]</h3>";
        //Name of server
        echo "<p>The name of the current script is: ", $_SERVER["SCRIPT_NAME"], "<br></p>";
        //Software that we are using
        echo "<p>This script was executed with the following server software: ", $_SERVER["SERVER_SOFTWARE"], "<br></p>";
        //Tyep of protocol we are using
        echo "<p>This script was requested with the following server protocol: ", $_SERVER["SERVER_PROTOCOL"], "<br></p>";
        //The name of the host/server
        echo "<p>This script is running on the following server name: ", $_SERVER["SERVER_NAME"], "<br></p>";
        //The server address
        echo "<p>This script is running on the following server address: ", $_SERVER["SERVER_ADDR"],"<br></p>";
        //The gate way we are using
        echo "<p>This script is running with the following gateway interface: ", $_SERVER["GATEWAY_INTERFACE"],"<br></p>";
        //The method that we are using
        echo "<p>This script is running with the following request method: ", $_SERVER["REQUEST_METHOD"],"<br></p>";
    ?>
</body>

</html>