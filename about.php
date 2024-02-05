<?php
    $userText = $_GET['userTextarea'];
    echo $userText;

    $badWord = $_GET['badWord'];
    echo $badWord;

    $censured = str_replace($badWord, '***', $userText);
    echo $censured;
?>
