<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details Form</title>
</head>
<body>

<h2>User Details Form</h2>

<form action="process_form.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="course">Course:</label>
    <input type="text" id="course" name="course" required><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
