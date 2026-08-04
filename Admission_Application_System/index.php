<html>
<head>
    <title>Admission Application Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>Admission Application Form</h1>

<form action="process.php" method="POST">

<label>Applicant Name</label>
<input type="text" name="name" required>

<label>Register Number</label>
<input type="text" name="regno" required>

<label>Email</label>
<input type="email" name="email" required>

<label>Phone Number</label>
<input type="tel" name="phone" required>

<label>Course</label>
<select name="course" required>
<option value="">Select Course</option>
<option>B.Sc Computer Science</option>
<option>BCA</option>
<option>B.Com</option>
<option>BBA</option>
</select>

<label>Address</label>
<textarea name="address" rows="4" required></textarea>

<br><br>

<input type="submit" value="Apply Now">

</form>

</div>

</body>
</html>