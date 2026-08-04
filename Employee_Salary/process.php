<?php

// Get employee details from the form

$employee_name = trim($_POST["employee_name"]);

$employee_id = trim($_POST["employee_id"]);

$department = trim($_POST["department"]);

$basic_salary = $_POST["basic_salary"];


// Function to calculate HRA

function calculateHRA($basic_salary)
{

    return $basic_salary * 20 / 100;

}


// Function to calculate DA

function calculateDA($basic_salary)
{

    return $basic_salary * 10 / 100;

}


// Function to calculate Gross Salary

function calculateGrossSalary(
    $basic_salary,
    $hra,
    $da
)
{

    return $basic_salary + $hra + $da;

}


// Function to calculate PF deduction

function calculatePF($basic_salary)
{

    return $basic_salary * 12 / 100;

}


// Function to calculate Tax

function calculateTax($gross_salary)
{

    return $gross_salary * 5 / 100;

}


// Function to calculate Total Deductions

function calculateTotalDeductions(
    $pf,
    $tax
)
{

    return $pf + $tax;

}


// Function to calculate Net Salary

function calculateNetSalary(
    $gross_salary,
    $total_deductions
)
{

    return $gross_salary - $total_deductions;

}


// Call the functions

$hra = calculateHRA($basic_salary);

$da = calculateDA($basic_salary);

$gross_salary = calculateGrossSalary(
    $basic_salary,
    $hra,
    $da
);

$pf = calculatePF($basic_salary);

$tax = calculateTax($gross_salary);

$total_deductions = calculateTotalDeductions(
    $pf,
    $tax
);

$net_salary = calculateNetSalary(
    $gross_salary,
    $total_deductions
);

?>
<html>

<head>

    <title>Salary Summary</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Employee Salary Summary</h1>

    <h2>Salary Calculated Successfully!</h2>


    <div class="salary-details">

        <h3>Employee Details</h3>

        <p>
            <b>Employee Name:</b>
            <?php echo htmlspecialchars($employee_name); ?>
        </p>

        <p>
            <b>Employee ID:</b>
            <?php echo htmlspecialchars($employee_id); ?>
        </p>

        <p>
            <b>Department:</b>
            <?php echo htmlspecialchars($department); ?>
        </p>


        <h3>Earnings</h3>

        <p>
            <b>Basic Salary:</b>
            ₹<?php echo number_format($basic_salary, 2); ?>
        </p>

        <p>
            <b>HRA (20%):</b>
            ₹<?php echo number_format($hra, 2); ?>
        </p>

        <p>
            <b>DA (10%):</b>
            ₹<?php echo number_format($da, 2); ?>
        </p>

        <p>
            <b>Gross Salary:</b>
            ₹<?php echo number_format($gross_salary, 2); ?>
        </p>


        <h3>Deductions</h3>

        <p>
            <b>PF (12%):</b>
            ₹<?php echo number_format($pf, 2); ?>
        </p>

        <p>
            <b>Tax (5% of Gross Salary):</b>
            ₹<?php echo number_format($tax, 2); ?>
        </p>

        <p>
            <b>Total Deductions:</b>
            ₹<?php echo number_format($total_deductions, 2); ?>
        </p>


        <hr>

        <h2>
            Net Salary:
            ₹<?php echo number_format($net_salary, 2); ?>
        </h2>

    </div>


    <a href="index.php">
        Calculate Another Salary
    </a>

</div>

</body>

</html>