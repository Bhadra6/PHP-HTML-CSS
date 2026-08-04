<?php

// Get employee details

$employee_name = trim($_POST["employee_name"]);

$employee_id = trim($_POST["employee_id"]);

$quality = $_POST["quality"];

$productivity = $_POST["productivity"];

$teamwork = $_POST["teamwork"];

$communication = $_POST["communication"];


// Calculate total score

$total_score =
    $quality +
    $productivity +
    $teamwork +
    $communication;


// Calculate average score

$average_score = $total_score / 4;


// Determine rating using if-elseif-else

if ($average_score >= 90) {

    $rating = "Excellent";

    $message =
        "Outstanding performance! Keep up the excellent work.";

}
elseif ($average_score >= 75) {

    $rating = "Very Good";

    $message =
        "Very good performance. Keep improving.";

}
elseif ($average_score >= 60) {

    $rating = "Good";

    $message =
        "Good performance. There is room for further improvement.";

}
elseif ($average_score >= 50) {

    $rating = "Average";

    $message =
        "Average performance. Try to improve your skills.";

}
else {

    $rating = "Needs Improvement";

    $message =
        "Performance needs improvement. Focus on developing your skills.";

}

?>

<html>

<head>

    <title>Performance Evaluation Result</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Performance Evaluation Result</h1>

    <p class="success">
        Employee performance has been evaluated successfully!
    </p>


    <div class="evaluation-card">

        <h2>Employee Details</h2>

        <p>
            <b>Employee Name:</b>
            <?php echo htmlspecialchars($employee_name); ?>
        </p>

        <p>
            <b>Employee ID:</b>
            <?php echo htmlspecialchars($employee_id); ?>
        </p>


        <h2>Performance Scores</h2>

        <p>
            <b>Quality of Work:</b>
            <?php echo $quality; ?>/100
        </p>

        <p>
            <b>Productivity:</b>
            <?php echo $productivity; ?>/100
        </p>

        <p>
            <b>Teamwork:</b>
            <?php echo $teamwork; ?>/100
        </p>

        <p>
            <b>Communication:</b>
            <?php echo $communication; ?>/100
        </p>


        <h2>Evaluation Result</h2>

        <p>
            <b>Total Score:</b>
            <?php echo $total_score; ?>/400
        </p>

        <p>
            <b>Average Score:</b>
            <?php echo number_format(
                $average_score,
                2
            ); ?>/100
        </p>

        <p>
            <b>Performance Rating:</b>
            <?php echo $rating; ?>
        </p>

        <p class="message">
            <?php echo $message; ?>
        </p>

    </div>


    <a href="index.php">
        Evaluate Another Employee
    </a>

</div>

</body>

</html>