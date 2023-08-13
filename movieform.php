<?php
require './classes/DbConnector.php';

use classes\DbConnector;

$dbcon = new DbConnector();

try {
    $con = $dbcon->getConnection();
    $query = "SELECT * FROM movies"; // Corrected table name to "Theatre"
    $pstmt = $con->prepare($query);
    $pstmt->execute(); // Execute the query
    $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);
} catch (Exception $ex) {
    // Handle exceptions
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>All Theatres</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                background-color: #f8f9fa;
            }

            .container {
                margin-top: 50px;
            }

            .head {
                text-align: center;
                padding: 10px 0px 10px 0px;
                margin-bottom: 20px;
            }

            .table {
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            }

            .table th, .table td {
                vertical-align: middle;
            }

            .table th {
                background-color: #007bff;
                color: #fff;
            }

            .table tbody tr:nth-child(odd) {
                background-color: #f8f9fa;
            }

            .table tbody tr:hover {
                background-color: #f0f8ff;
            }

            .btn-primary {
                background-color: #007bff;
                border: none;
                border-radius: 5px;
            }

            .btn-primary:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="head">
                <h1>All Theatres</h1>
            </div>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Movie Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Language</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">End Time</th>
                        <th scope="col">Start Date</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rs as $movie) { ?>
                        <tr>
                            <td><?php echo $movie->moviename; ?></td>
                            <td><?php echo $movie->description; ?></td>
                            <td><?php echo $movie->language; ?></td>
                            <td><?php echo $movie->starttime; ?></td>
                            <td><?php echo $movie->endtime; ?></td>
                            <td><?php echo $movie->date; ?></td>
                            <td>
                                <a href="editMovie.php?moveid=<?php echo $movie->moveid; ?>">Edit</a>
                                <a href="deleteMovie.php?moveid=<?php echo $movie->moveid; ?>">Delete</a>
                            </td>

                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
