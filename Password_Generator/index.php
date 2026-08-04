<html>

<head>

    <title>Password Generator</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Password Generator</h1>

    <p>
        Generate a strong password using uppercase letters,
        lowercase letters, digits, and special characters.
    </p>

    <form action="generate.php" method="POST">

        <label>Password Length:</label>

        <input
            type="number"
            name="length"
            min="8"
            max="30"
            placeholder="Enter length (8-30)"
            required
        >

        <button type="submit">
            Generate Password
        </button>

    </form>

</div>

</body>

</html>