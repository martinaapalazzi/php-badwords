<?php
    $userText = $_GET['userTextarea'];

    $badWord = $_GET['badWord'];

    $censured = str_replace($badWord, '***', $userText);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>
        Length userText: <?php echo ' '.strlen($userText).' characters'; ?>
    </h3>
    <p>
        <?php
            echo $userText;
        ?>
    </p>

    <div>
        <h3>
            Censured word:
        </h3>
        <p>
            <?php echo $badWord ?>
        </p>
    </div>

    <h3>
        Length with censured word: <?php echo ' '.strlen($badWord).' characters'; ?>
    </h3>
    <p>
        <?php
            echo $censured;
        ?>
    </p>

</body>
</html>
