<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'Admin') {
    header('Location: Login.php');
    exit;
}

// Admin-specific content
echo "Welcome, Admin!";
// ... (other admin content)
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
</head>
<body>
    <h2>Admin Page</h2>
    <!-- Admin content goes here -->
</body>
</html>
