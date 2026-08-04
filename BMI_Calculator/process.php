<?php

// Get height and weight from the form

$height_cm = $_POST["height"];

$weight = $_POST["weight"];


// Convert height from centimetres to metres

$height_m = $height_cm / 100;


// Calculate BMI

$bmi = $weight / ($height_m * $height_m);


// Determine health status and recommendation

if ($bmi < 18.5) {

    $status = "Underweight";

    $recommendation = "Try to eat a balanced and nutritious diet. Consider consulting a healthcare professional for personalized advice.";

}
elseif ($bmi < 25) {

    $status = "Normal Weight";

    $recommendation = "Maintain a balanced diet and continue regular physical activity to support your overall health.";

}
elseif ($bmi < 30) {

    $status = "Overweight";

    $recommendation = "Consider regular exercise and a balanced diet. A healthcare professional can provide personalized guidance.";

}
else {

    $status = "Obesity";

    $recommendation = "Consider speaking with a healthcare professional for personalized advice about nutrition, physical activity, and overall health.";

}

?>

<html>

<head>

    <title>BMI Result</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>BMI Result</h1>

    <h2>Calculation Completed Successfully!</h2>

    <p>
        <b>Height:</b>
        <?php echo $height_cm; ?> cm
    </p>

    <p>
        <b>Weight:</b>
        <?php echo $weight; ?> kg
    </p>

    <hr>

    <p class="bmi-result">
        <b>Your BMI:</b>
        <?php echo number_format($bmi, 2); ?>
    </p>

    <p>
        <b>Health Status:</b>
        <?php echo $status; ?>
    </p>

    <div class="recommendation">

        <h3>Health Recommendation</h3>

        <p>
            <?php echo $recommendation; ?>
        </p>

    </div>

    <br>

    <a href="index.php">
        Calculate Again
    </a>

</div>

</body>

</html>