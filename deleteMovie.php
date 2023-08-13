

<?php
require './classes/DbConnector.php';

use classes\DbConnector;

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['moveid'])) {
    $movieId = $_GET['moveid'];

    $dbcon = new DbConnector();

    try {
        $con = $dbcon->getConnection();
        $query = "DELETE FROM movies WHERE moveid = ?";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $movieId);
        $pstmt->execute();

        // Redirect back to the movies list page after successful deletion
        header("Location: movieform.php");
        exit();
    } catch (PDOException $exc) {
        // Handle exceptions
        echo "Error: " . $exc->getMessage();
    }
}
?>
