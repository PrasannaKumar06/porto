<?php
include_once'connect.php';
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

$query = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
    echo "duplicate";
    exit();
} else {

    // Insert the user data into the "users" table
    $insertQuery = "INSERT INTO users (email,password) VALUES ('$email','$password')";
    $insertResult = mysqli_query($con, $insertQuery);

    if ($insertResult) {
        echo "success";
        $_SESSION['email'] = $email;
        exit();
    } else {
        echo "error";
        exit();
    }
}
?>