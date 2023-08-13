<?php
require './classes/DbConnector.php';

use classes\DbConnector;
$dbcon = new DbConnector();

try {
    $con = $dbcon->getConnection();
    $query = "SELECT * FROM Theatre";
    $pstmt = $con->prepare($query);
    $pstmt->execute();
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
      
    /* Rest of your existing styles */

    body {
        background-image: url('https://media.tegna-media.com/assets/WTHR/images/dbf01d66-80b9-4bca-95df-f664799a6e73/dbf01d66-80b9-4bca-95df-f664799a6e73_1920x1080.jpg'); /* Replace with your image path */
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    /* Adjust form container styles */
    .container {
        margin-top: 20px;
        background-color: rgba(255, 255, 255, 0.8); /* Adjust background color and opacity */
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    /* Rest of your existing styles */


        .container {
            margin-top: 20px;
        }

        .head {
            text-align: center;
            padding: 10px 0px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
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
                    <th scope="col">Theatre ID</th>
                    <th scope="col">Theatre Name</th>
                    <th scope="col">Theatre City</th>
                    <th scope="col">Theatre Location</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rs as $theater) { ?>
                    <tr>
                        <td><?php echo $theater->Theatre_id; ?></td>
                        <td><?php echo $theater->Theatre_name; ?></td>
                        <td><?php echo $theater->Theatre_city; ?></td>
                        <td><?php echo $theater->Theatre_location; ?></td>
                        <td>
                            <a href="edit.php?theaterId=<?php echo $theater->Theatre_id; ?>">Edit</a>
                            <a href="delete.php?theaterId=<?php echo $theater->Theatre_id; ?>">Delete</a>
                            <a href="movieup.php?theaterId=<?php echo $theater->Theatre_id; ?>" class="btn btn-primary" role="button" name="submit1">Add Movies</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body> 
</html>
