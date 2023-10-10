<?php
include_once 'connect.php';
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

$query = "SELECT password FROM users WHERE email = '$email'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $userpassword = $row["password"];

    if ($password == $userpassword) {
        echo "success";
        $_SESSION['email'] = $email;
        exit();
    } else {
        echo "invalid";
        exit();
    }
} else {
    echo "error";
    exit();
}
?>