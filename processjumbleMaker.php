<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Process Jumble Maker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>
</head>
<body>
    <h2>Process Jumble Maker</h2>
    <?php
           $errorCount = 0;
            $words = array();
            function displayError($fieldName, $errorMsg) {
                //Check errors
                global $errorCount;
                echo "Error for \"$fieldName\":$errorMsg<br>\n";
                ++$errorCount;
            }
            function validateWord($data, $fieldName) {
                //See if user has typed in field
                global $errorCount;
                $retval = "";
                if (empty($data)) {
                    displayError($fieldName, "This field is required");
                    ++$errorCount;
                    $retval = "";
                }
                else {
                    //Is user has typed in field...
                    $retval = trim($data);
                    $retval = stripslashes($retval);
                    if (strlen($retval) < 4 || strlen($retval) > 7) {
                        //If user has less then 4
                        //If user has more then 4
                        displayError($fieldName, "Words must consist only of letters");
                    }
                }
                $retval = strtoupper($retval);
                $retval = str_shuffle($retval);
                return $retval;
            }
            //Grabbing from the html
            $words[] = validateWord($_POST['word1'], "Word 1");
            $words[] = validateWord($_POST['word2'], "Word 2");
            $words[] = validateWord($_POST['word3'], "Word 3");
            $words[] = validateWord($_POST['word4'], "Word 4");
            if ($errorCount > 0) {
                //If the user has any errors...
                echo "Please use the \"Back\" button to re-enter any missing data.<br>\n";
            }
            else {
                $wordNum = 0;
                foreach ($words as $word) {
                    echo "Word " . ++$wordNum . ": $word<br>\n";
                }
            }
        ?>
</body>
</html>