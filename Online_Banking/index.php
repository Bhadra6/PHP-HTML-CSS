<html>

<head>

    <title>Online Banking Login</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="login-container">

    <h1>Online Banking</h1>

    <p>Customer Login</p>

    <form action="login.php" method="POST">

        <label>Username:</label>

        <input
            type="text"
            name="username"
            placeholder="Enter username"
            required
        >

        <label>Password:</label>

        <input
            type="password"
            name="password"
            placeholder="Enter password"
            required
        >

        <button type="submit">
            Login
        </button>

    </form>

    <p class="demo">
        Demo Username: bhadra<br>
        Demo Password: 12345
    </p>

</div>

</body>

</html>