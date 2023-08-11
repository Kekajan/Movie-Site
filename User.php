<?php
session_start();
include 'config.php';

if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'User') {
    header('Location: Login.php');
    exit;
}

// User-specific content
echo "Welcome, User!";
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Page</title>
</head>
<body>
    <h2>User Page</h2>
    <!-- User content goes here -->
</body>
</html>
