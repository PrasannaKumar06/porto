<?php
include_once 'connect.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $email = $_SESSION['email'];
    $template = $_POST['template'];
    $_SESSION['$template'] = $template;
    $name = $_POST['name'];
    $about = $_POST['about'];
    $imageBase64 = $_POST['imageBase64'];

    // Convert the base64 image to binary data
    $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imageBase64));

    // Prepare the query to insert data into the user_requests table
    $query = "INSERT INTO user_requests (email, template, name, about, image) VALUES (?, ?, ?, ?, ?)
              ON DUPLICATE KEY UPDATE template = VALUES(template), name = VALUES(name), about = VALUES(about), image = VALUES(image)";

    // Prepare the statement
    $stmt = mysqli_prepare($con, $query);

    // Bind the parameters to the statement
    mysqli_stmt_bind_param($stmt, 'sssss', $email, $template, $name, $about, $imageData);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        // Data insertion was successful
        $response = ['status' => 'success', 'message' => 'Form submission successful'];
    } else {
        // Data insertion failed
        $response = ['status' => 'error', 'message' => 'Form submission failed'];
    }

    // Close the statement
    mysqli_stmt_close($stmt);

    // Close the database connection
    mysqli_close($con);

    // Return the response as JSON
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>