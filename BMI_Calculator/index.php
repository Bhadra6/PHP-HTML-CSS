<html>

<head>

    <title>BMI Calculator</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>BMI Calculator</h1>

    <p class="intro">
        Enter your height and weight to calculate your BMI.
    </p>

    <form action="process.php" method="POST">

        <label>Height (in cm):</label>

        <input
            type="number"
            name="height"
            min="1"
            step="0.1"
            placeholder="Enter height in cm"
            required
        >

        <label>Weight (in kg):</label>

        <input
            type="number"
            name="weight"
            min="1"
            step="0.1"
            placeholder="Enter weight in kg"
            required
        >

        <button type="submit">
            Calculate BMI
        </button>

    </form>

</div>

</body>

</html>