<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $course = $_POST["course"];

    // Database connection details
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "tech_art";

    // Create a database connection
    $conn = new mysqli($hostname, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query to insert data into the database
    $sql = "INSERT INTO user_details (name, email, course) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $course);

    if ($stmt->execute()) {
        echo "<h2>Data saved successfully!</h2>";
    } else {
        echo "<h2>Error: " . $stmt->error . "</h2>";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
