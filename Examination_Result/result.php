<?php

// Get student details

$student_name = trim($_POST["student_name"]);

$register_number = trim($_POST["register_number"]);

$english = $_POST["english"];

$mathematics = $_POST["mathematics"];

$computer_science = $_POST["computer_science"];

$data_science = $_POST["data_science"];

$digital_marketing = $_POST["digital_marketing"];


// Function to calculate total marks

function calculateTotal(
    $english,
    $mathematics,
    $computer_science,
    $data_science,
    $digital_marketing
)
{

    return
        $english +
        $mathematics +
        $computer_science +
        $data_science +
        $digital_marketing;

}


// Function to calculate percentage

function calculatePercentage($total_marks)
{

    return ($total_marks / 500) * 100;

}


// Function to determine class

function determineClass($percentage)
{

    if ($percentage >= 75) {

        return "Distinction";

    }
    elseif ($percentage >= 60) {

        return "First Class";

    }
    elseif ($percentage >= 50) {

        return "Second Class";

    }
    elseif ($percentage >= 40) {

        return "Pass Class";

    }
    else {

        return "Fail";

    }

}


// Call the functions

$total_marks = calculateTotal(
    $english,
    $mathematics,
    $computer_science,
    $data_science,
    $digital_marketing
);


$percentage = calculatePercentage(
    $total_marks
);


$class_obtained = determineClass(
    $percentage
);

?>

<html>

<head>

    <title>Examination Result</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Examination Result</h1>

    <p class="success">
        Result analyzed successfully!
    </p>


    <div class="result-card">

        <h2>Student Details</h2>

        <p>
            <b>Student Name:</b>
            <?php echo htmlspecialchars($student_name); ?>
        </p>

        <p>
            <b>Register Number:</b>
            <?php echo htmlspecialchars($register_number); ?>
        </p>


        <h2>Subject Marks</h2>

        <p>
            <b>English:</b>
            <?php echo $english; ?>/100
        </p>

        <p>
            <b>Mathematics:</b>
            <?php echo $mathematics; ?>/100
        </p>

        <p>
            <b>Computer Science:</b>
            <?php echo $computer_science; ?>/100
        </p>

        <p>
            <b>Data Science:</b>
            <?php echo $data_science; ?>/100
        </p>

        <p>
            <b>Digital Marketing:</b>
            <?php echo $digital_marketing; ?>/100
        </p>


        <h2>Result Analysis</h2>

        <p>
            <b>Total Marks:</b>
            <?php echo $total_marks; ?>/500
        </p>

        <p>
            <b>Percentage:</b>
            <?php echo number_format(
                $percentage,
                2
            ); ?>%
        </p>

        <p>
            <b>Class Obtained:</b>
            <?php echo $class_obtained; ?>
        </p>

    </div>


    <a href="index.php">
        Analyze Another Result
    </a>

</div>

</body>

</html>