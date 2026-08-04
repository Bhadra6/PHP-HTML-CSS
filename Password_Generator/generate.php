<?php

// Get password length from the form

$length = $_POST["length"];


// User-defined function to generate password

function generatePassword($length)
{

    // Character sets

    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

    $lowercase = "abcdefghijklmnopqrstuvwxyz";

    $digits = "0123456789";

    $special = "!@#$%^&*";


    // Combine all character sets

    $all_characters = $uppercase . $lowercase . $digits . $special;


    // Start password with one character from each category

    $password = "";

    $password .= $uppercase[random_int(0, strlen($uppercase) - 1)];

    $password .= $lowercase[random_int(0, strlen($lowercase) - 1)];

    $password .= $digits[random_int(0, strlen($digits) - 1)];

    $password .= $special[random_int(0, strlen($special) - 1)];


    // Generate remaining characters

    for ($i = 4; $i < $length; $i++) {

        $password .= $all_characters[
            random_int(0, strlen($all_characters) - 1)
        ];

    }


    // Shuffle the password

    $password = str_shuffle($password);


    return $password;

}


// Generate password

$password = generatePassword($length);

?>

<html>

<head>

    <title>Generated Password</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Password Generated Successfully!</h1>

    <p>
        Your secure password is:
    </p>

    <div class="password-box">

        <?php echo htmlspecialchars($password); ?>

    </div>

    <div class="details">

        <p>
            <b>Password Length:</b>
            <?php echo $length; ?>
        </p>

        <p>
            ✔ Uppercase letters included
        </p>

        <p>
            ✔ Lowercase letters included
        </p>

        <p>
            ✔ Digits included
        </p>

        <p>
            ✔ Special characters included
        </p>

    </div>

    <a href="index.php">
        Generate Another Password
    </a>

</div>

</body>

</html>