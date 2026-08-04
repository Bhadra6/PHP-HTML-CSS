<?php

// Get the title entered by the user
$title = $_POST["title"];

// Convert the title to lowercase
$lowercase_title = strtolower($title);

// Initialize counts
$vowels = 0;
$consonants = 0;
$digits = 0;
$special_characters = 0;

// Find the length of the title
$length = strlen($title);

// Check each character
for ($i = 0; $i < $length; $i++) {

    $character = $lowercase_title[$i];

    // Check for vowels
    if (
        $character == "a" ||
        $character == "e" ||
        $character == "i" ||
        $character == "o" ||
        $character == "u"
    ) {

        $vowels++;

    }

    // Check for consonants
    elseif (ctype_alpha($character)) {

        $consonants++;

    }

    // Check for digits
    elseif (ctype_digit($character)) {

        $digits++;

    }

    // Count special characters
    else {

        $special_characters++;

    }
}

?>

<html>

<head>

    <title>String Analysis Result</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>String Analysis Result</h1>

    <h2>Analysis Completed Successfully!</h2>

    <p>
        <b>Entered Title:</b>
        <?php echo $title; ?>
    </p>

    <hr>

    <p>
        <b>Number of Vowels:</b>
        <?php echo $vowels; ?>
    </p>

    <p>
        <b>Number of Consonants:</b>
        <?php echo $consonants; ?>
    </p>

    <p>
        <b>Number of Digits:</b>
        <?php echo $digits; ?>
    </p>

    <p>
        <b>Number of Special Characters:</b>
        <?php echo $special_characters; ?>
    </p>

    <br>

    <a href="index.php">
        Analyze Another Title
    </a>

</div>

</body>

</html>