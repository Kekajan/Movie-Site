<?php
require './classes/DbConnector.php';

use classes\DbConnector;

$dbcon = new DbConnector();

if (isset($_GET['theaterId'])) {
    $theaterId = $_GET['theaterId']; // Get the theater ID from the query parameters
    
    try {
        $con = $dbcon->getConnection();
        $query = "DELETE FROM Theatre WHERE Theatre_id = ?";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $theaterId);
        $pstmt->execute();

        if ($pstmt->rowCount() > 0) {
            header("Location: thatrelist.php");
            exit(); // Make sure to exit after sending the header
        }
    } catch (PDOException $ex) {
        // Handle exceptions here
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Delete Theatre</title>
</head>
<body>
    <h1>Theater Deleted Successfully</h1>
</body>
</html>

