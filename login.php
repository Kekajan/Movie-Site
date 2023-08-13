<?php
session_start();
require './classes/DbConnector.php';

use classes\DbConnector;

// Create a new database connection instance
$dbConnector = new DbConnector();
$pdo = $dbConnector->getConnection(); // Change the method name to getConnection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['User_email'];
    $password = $_POST['User_pwd'];

    try {
        $stmt = $pdo->prepare("SELECT * FROM user WHERE User_email = :email");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['User_pwd'])) {
            $_SESSION['user_id'] = $user['User_id'];
            $_SESSION['user_type'] = $user['User_type'];

            if ($user['User_type'] === 'Admin') {
                header('Location: theateradmin.php');
                exit;
            } else {
                header('Location: index.php');
                exit;
            }
        } else {
            $error_message = 'Invalid email or password';
        }
    } catch (PDOException $e) {
        $error_message = 'Error fetching user details: ' . $e->getMessage();
    }
}
?>

<!-- ... rest of your HTML code ... -->

<!-- ... rest of your HTML code ... -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/login.css">
    <title>Login - Cine Phile</title>
</head>
<body>      
      <div class="container">
        <div class="box form-box">
            
            <header>Login</header>
            <form action="" method="POST">
    <?php if (isset($error_message)) { ?>
        <p><?php echo $error_message; ?></p>
    <?php } ?>
    <div class="field input">
                    <label for="User_email">Email</label>
                    <input type="email" name="User_email" id="User_email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="User_pwd">Password</label>
                    <input type="password" name="User_pwd" id="User_pwd" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn btn--primary outline-none btn btn-outline-warning"  name="submit" value="Login" required >
                </div>
                <div class="links">
                    Don't have account? <a href="register.php">Register Now</a>
                </div>
            </form>
        </div>
        
      
    </div>
  
</div>
      
</body>
</html>
