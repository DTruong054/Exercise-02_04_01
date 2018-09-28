<!DOCTYPE html>
<html>
<!-- 
    Exercise-02_01_01
    Author: Daniel Truong
    Date: 9.10.18
    File: webTemp.php -->

<head>
    <meta charset="utf-8" />
    <title>WebTemplate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Web Template</h2>
    <?php //Using include
     include("inc_header.html"); 
     ?>
    <div style="width: 20%; text-align: center; float:left">
        <?php
            include("inc_buttonNav.html");
        ?>
    </div>
    <!-- Start of Dynamic Content -->
    <?php
        if (isset($_GET['content'])) {
            switch ($_GET['content']) {
                case 'Home':
                //Value of home means to 
                //Display the default page
                default:
                    include("inc_home.html");
                    break;
                case 'About Me':
                    include("inc_about.html");
                    break;
                case 'Contact Me':
                    include("inc_contactme.html");
                    break;
            }
        } else {
            include("inc_home.html");
        }
    ?>
    <!-- End of Dynamic Content -->
    <?php
        include("inc_footer.php");
    ?>
</body>

</html>