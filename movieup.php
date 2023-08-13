<?php
require './classes/DbConnector.php';

use classes\DbConnector;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit1'])) {
    $movieName = $_POST['moviename'];
    $movieDes = $_POST['moviedes'];
    $movieLan = $_POST['movielan'];
    $movieSt = $_POST['moviest'];
    $movieEt = $_POST['movieet'];
    $movieDate = $_POST['moviedate'];

    $dbcon = new DbConnector();
    try {
        $con = $dbcon->getConnection();
        $query = "INSERT INTO movies (moviename, description,language,starttime,endtime,date) VALUES (?, ?, ?, ?, ?, ?)";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $movieName);
        $pstmt->bindValue(2, $movieDes);
        $pstmt->bindValue(3, $movieLan);
        $pstmt->bindValue(4, $movieSt);
        $pstmt->bindValue(5, $movieEt);
        $pstmt->bindValue(6, $movieDate);
        $pstmt->execute();

        if ($pstmt->rowCount() > 0) {
            // Redirect to movieform.php after successful insertion
          header("Location: movieform.php?theaterId=$theaterId");

            exit(); // Important to exit after sending the header
        } else {
            $message = "Error occurred";
        }
    } catch (PDOException $exc) {
        $message = $exc->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Movie</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .jumbotron {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .jumbotron h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .jumbotron p {
            font-size: 1.2rem;
            color: #6c757d;
        }

        .form-control {
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .mt-3 {
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Add a Movie</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <form method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="moviename" placeholder="Movie Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="moviedes" placeholder="Movie Description">
                </div>
                  <div class="form-group">
                    <label for="movielan">Movie Language</label>
                    <select class="form-control" name="movielan">
                        <option value="English">English</option>
                        <option value="Tamil">Tamil</option>
                        <option value="Sinhala">Sinhala</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label for="moviest">Start Time</label>
                        <input type="time" class="form-control" name="moviest">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="movieet">End Time</label>
                        <input type="time" class="form-control" name="movieet">
                    </div>
                </div>
                <div class="form-group">
                    <label for="moviedate">Show Date</label>
                    <input type="date" class="form-control" name="moviedate">
                </div>
                <button class="btn btn-primary btn-lg" name="submit1" type="submit">Add Movie</button>
            </form>
            <?php if (isset($message)) : ?>
                <div class="mt-3">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
