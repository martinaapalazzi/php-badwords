<?php
    $userText = $_GET['userTextarea'];
    echo $userText;

    $badWord = $_GET['badWord'];
    echo $badWord;

    $censured = str_replace($badWord, '***', $userText);
    echo $censured;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>
        <?php
            echo $userText;
            echo 'length usertext'.": ".strlen($userText);
        ?>
    </p>
    <p>
        <?php
            echo $censured;
            echo 'length badword'.": ".strlen($badWord);
        ?>
    </p>

</body>
</html>
