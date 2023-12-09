<?php
session_start();
require_once('config.php');
require_once('functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (verifyPassword($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header("Location: ../html/success.php");
            exit();
        } else {
            echo "Incorrect password";
        }
    } else {
        echo "User not found";
    }

    $conn->close();
}
