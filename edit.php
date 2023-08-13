<?php
require './classes/DbConnector.php';

use classes\DbConnector;

$dbcon = new DbConnector();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $theaterId = $_POST['theaterid'];
    $theaterName = $_POST['theatername'];
    $theaterCity = $_POST['theatercity'];
    $theaterLoca = $_POST['theaterloca'];

    $con = $dbcon->getConnection();
    $query = "UPDATE Theatre SET Theatre_id=?, Theatre_name=?, Theatre_city=?, Theatre_location=? WHERE Theatre_id=?";
    $pstmt = $con->prepare($query);
    $pstmt->bindValue(1, $theaterId);
    $pstmt->bindValue(2, $theaterName);
    $pstmt->bindValue(3, $theaterCity);
    $pstmt->bindValue(4, $theaterLoca);
    $pstmt->bindValue(5, $theaterId); // The WHERE condition for update
    $pstmt->execute();
    
    if ($pstmt->rowCount() > 0) {
        header("Location: thatrelist.php");
        exit();
    }
} else {
    if (isset($_GET["theaterId"])) { // Change to "theaterId"
        $id = $_GET["theaterId"]; // Change to "theaterId"
        $con = $dbcon->getConnection();
        $query = "SELECT * FROM Theatre WHERE Theatre_id=?";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $id);
        $pstmt->execute();
        $rs = $pstmt->fetch(PDO::FETCH_OBJ);
    } else {
        // Handle error or redirect as needed
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Theatre</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            margin-bottom: 20px;
        }

        table {
            margin: 0 auto;
        }

        table td {
            padding: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Theatre</h1>
        <hr> 
        <?php if (isset($rs)) { ?>
            <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST"> <!-- Use REQUEST_URI -->
                <input type="hidden" name="theaterid" value="<?php echo $id; ?>"> <!-- Use theaterid -->
                <table>
                    <tr>
                        <td>Theatre Name</td>
                        <td><input type="text" name="theatername" value="<?php echo $rs->Theatre_name; ?>"></td>
                    </tr>
                    <tr>
                        <td>Theatre City</td>
                        <td><input type="text" name="theatercity" value="<?php echo $rs->Theatre_city; ?>"></td>
                    </tr>
                    <tr>
                        <td>Theatre Location</td>
                        <td><input type="text" name="theaterloca" value="<?php echo $rs->Theatre_location; ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Update"></td>
                    </tr>
                </table>
            </form>
        <?php } else { ?>
            <p>Theatre not found.</p>
        <?php } ?>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
