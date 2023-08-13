<?php
require './classes/DbConnector.php';

use classes\DbConnector;

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['moveid'])) {
    $moveid = $_GET['moveid'];

    $dbcon = new DbConnector();

    try {
        $con = $dbcon->getConnection();
        $query = "SELECT * FROM movies WHERE moveid = ?";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $moveid);
        $pstmt->execute();
        $movie = $pstmt->fetch(PDO::FETCH_OBJ);
        
        

    } catch (PDOException $exc) {
        // Handle exceptions
        echo "Error: " . $exc->getMessage();
    }

}
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['moveid'])) {
    $moveid = $_POST['moveid'];
    $moviename = $_POST['moviename'];
    $description = $_POST['moviedes'];
    $language = $_POST['movielan'];
    $starttime = $_POST['moviest'];
    $endtime = $_POST['movieet'];
    $date = $_POST['moviedate'];

    $dbcon = new DbConnector();

   
        $con = $dbcon->getConnection();
        $query = "UPDATE movies SET moviename = ?, description = ?, language = ?, starttime = ?, endtime = ?, date = ? WHERE moveid = ?";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $moviename);
        $pstmt->bindValue(2, $description);
        $pstmt->bindValue(3, $language);
        $pstmt->bindValue(4, $starttime);
        $pstmt->bindValue(5, $endtime);
        $pstmt->bindValue(6, $date);
        $pstmt->bindValue(7, $moveid);
        $pstmt->execute();
        if ($pstmt->rowCount() > 0) {
        // Redirect back to the movie form
        header("Location: movieform.php");
        exit();
        }
        
        
       
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Movie</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add your custom styles if needed -->
</head>
<body>
    <div class="container">
        <h1>Edit Movie</h1>
        <form method="POST" action="editMovie.php"> <!-- Assume you have an update script named updateMovie.php -->
            <input type="hidden" name="moveid" value="<?php echo $movie->moveid; ?>">
            <div class="form-group">
                <label for="moviename">Movie Name</label>
                <input type="text" class="form-control" name="moviename" value="<?php echo $movie->moviename; ?>">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description"><?php echo $movie->description; ?></textarea>
            </div>
            
               <div class="form-group">
            <label for="movielan">Movie Language</label>
            <select class="form-control" name="movielan">
                <option value="English" <?php                if ($movie->language === 'English') {
                    echo 'selected';
                }
                ?>>English</option>
                <option value="Tamil" <?php                if ($movie->language === 'Tamil') {
                    echo 'selected';
                }
                ?>>Tamil</option>
                <option value="Sinhala" <?php                if ($movie->language === 'Sinhala') {
                    echo 'selected';
                }
                ?>>Sinhala</option>
            </select>
        </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label for="moviest">Start Time</label>
                        <input type="time" class="form-control" name="moviest" value="<?php echo $movie->starttime; ?>">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="movieet">End Time</label>
                        <input type="time" class="form-control" name="movieet" value="<?php echo $movie->endtime; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="moviedate">Show Date</label>
                    <input type="date" class="form-control" name="moviedate" value="<?php echo $movie->date; ?>">
                </div>
               <button type="submit" class="btn btn-primary">Edit Movie</button>
            </form>
           
            
            
            
           
        
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
