<?php
require './classes/DbConnector.php';

use classes\DbConnector;
if (isset($_POST['submit'])) {
    $theaterId = $_POST['theaterid'];
    $theaterName = $_POST['theatername'];
    $theaterCity = $_POST['theatercity'];
    $theaterLoca = $_POST['theaterloca'];

    $dbcon = new DbConnector();
    try {
        $con = $dbcon->getConnection();
        $query = "INSERT INTO Theatre (Theatre_id,Theatre_name,Theatre_city,Theatre_location) VALUES (?, ?, ?, ?)";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $theaterId);
        $pstmt->bindValue(2, $theaterName);
        $pstmt->bindValue(3, $theaterCity);
        $pstmt->bindValue(4, $theaterLoca);
        $pstmt->execute();
 if ($pstmt->rowCount() > 0) {
            $message = "You have successfully added the theater";
            
            // Redirect to theatrelList.php after successful insertion
            header("Location: thatrelist.php");
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
    <title>Add a Theatre</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theateradmin.css" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <div class="head">
            <br><br>
            <div class="jumbotron">
                <h1 class="display-4">Add a Theatre</h1>
                <hr class="my-4">
                <form  method="POST">
                    <div class="row">
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="theaterid" placeholder="Theater id" aria-label="City">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="theatername" placeholder="Theater name" aria-label="State">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="theatercity" placeholder="Theater city" aria-label="State">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="theaterloca" placeholder="Theater location" aria-label="Zip">
                        </div>
                    </div>
                    <br><br>
                    <button class="btn btn-primary btn-lg" name="submit" type="submit">Add Theatre</button>
                </form>
                <?php if (isset($message)) : ?>
                    <div class="mt-3">
                        <?php echo $message; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <br><br>
      <?php include 'footer.php'; ?>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
