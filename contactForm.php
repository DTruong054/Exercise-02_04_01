<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>
</head>
<body>
    <h2>Contact Form</h2>
    <?php
        $showForm = true;
        $errorCount = 0;
        $sender = "";
        $email = "";
        $subject = "";
        $message = "";

        function displayForm($sender, $email, $subject, $message)
        {
            ?>
            <h2 style="text-align: center">Contact Me</h2>
            <form action="contactForm.php" name="contact" method="post">
            <p>Your Name: <br> <input type="text" name="Sender" value="<?php echo "$sender"; ?>"></p>
            <p>Your Email: <br> <input type="text" name="Email" value="<?php echo "$email"?>"></p>
            <p>Your Subject: <br> <input type="text" name="Subject" value="<?php echo "$subject"?>"></p>
            <p>Your Message: <br> <input type="textarea" name="Message" value="<?php echo "$message"?>"></p>

            <p> <input type="reset" value="Clear Form">&nbsp;&nbsp;
                <input type="submit" name="Submit" value="Send Form">
            </p>
            </form>
        <?php
        }
        if (isset($_POST['submit'])) {
            $sender = $validateInput($_POST['Sender'], "Your Name");
            $email = $valiidateEmail($_POST['Email'], "Your Email");
            $subject = $validateInput($_POST['Subject'], "Subject");
            $message = $validateInput($_POST['Message'], "Message");
            if ($errorCount == 0) {
                $showForm = false;
            } else {
                $showForm = true;
            }
        }

        if ($showForm) {
            if ($errorCount > 0) {
                echo "<p>Please re-enter the form information below</p>";
            }
            displayForm($sender, $email, $subject, $message);
        } else{
            $sendAddress = "$sender <$email>";
            $header = "From: $senderAddress\nCC:$senderAddress";
            $result = mail("mark.buckler@west-mec.org", $subject, $message, $header);
            if ($result) {
                echo "<p>Your message has been sent. Thank you, " . $sender . "</p>\n";
            } else {
                echo "<p>There was an error sending your message, ". $sender . "</p>\n";
            }
        }

        function validateInput($data, $fieldName)
        {
            global $errorCount;
            if (empty($data)) {
                echo "\"$fieldName\" is a required field.<br>\n";
                ++$errorCount;
                $retval;
            } else{
                $retval = trim($data);
                $retval = stripslashes($retval);
            }
            return $retval;
        }

        function validateEmail($data, $feildName)
        {
            global $errorCount;
            if (empty($data)) {
                echo "\"$fieldName\" is a required field.<br>\n";
                ++$errorCount;
                $retval = "";
            }
            else{
                $retval = trim($data);
                $retval = stripslashes($retval);
                $pattern = "/^[\w-]+(\.[\w-]+)*@" . "[\w-]+(\.[\w-]+)*" . "(\.[a-z]{2,})$/i";
                if (preg_match($pattern, $retval) == 0) {
                    echo "\"$fieldName\" is not a valid e-mail address. <br>\n";
                    ++$errorCount;
                }
            }
            return $retval;
        }
    ?>
</body>
</html>