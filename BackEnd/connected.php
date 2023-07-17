<?php
// Get user input from the form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $about = $_POST['about'];
    $portfolio = $_POST['portfolio'];

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = " ";
    $dbname = "portfolio";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO user_info (name, about, portfolio) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $about, $portfolio);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
