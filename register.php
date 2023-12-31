<?php
// Include the DbConnector class
require './classes/DbConnector.php';

use classes\DbConnector;

// Create a new instance of DbConnector
$dbConnector = new DbConnector();

// Get the PDO connection
$pdo = $dbConnector->getConnection();

if(isset($_POST['submit'])){

  $fname = $_POST['User_fname'];
$lname = $_POST['User_lname'];
$email = $_POST['User_email'];
$dob = $_POST['User_dob'];
$contactNo = $_POST['User_contactno'];
$uname = $_POST['User_username'];
$pass = password_hash($_POST['User_pwd'], PASSWORD_DEFAULT);
$user_type = $_POST['User_type'];


$insert = "INSERT INTO user (User_fname, User_lname, User_email, User_dob, User_contactno, User_username, User_pwd, User_type)"
. " VALUES(:fname, :lname, :email, :dob, :contactNo, :uname, :pass, :user_type)";

$stmt = $pdo->prepare($insert);
$stmt->bindParam(':fname', $fname);
$stmt->bindParam(':lname', $lname);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':dob', $dob);
$stmt->bindParam(':contactNo', $contactNo);
$stmt->bindParam(':uname', $uname);
$stmt->bindParam(':pass', $pass);
$stmt->bindParam(':user_type', $user_type);

if ($stmt->execute()) {
    // Successfully inserted, redirect to login.php
    header('Location: Login.php');
    exit; // Make sure to exit after redirecting
} else {
    // Handle insertion failure
    echo 'Error inserting data into the database.';
}


}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <title>Register - Cine Phile</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">

        

            <header>Sign Up</header>
            <form action="" method="post">
                 <?php
                    if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                };
            };
      ?>
                <div class="field input">
                    <label for="User_fname">FirstName</label>
                    <input type="text" name="User_fname" id="User_fname" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="User_lname">Lastname</label>
                    <input type="text" name="User_lname" id="User_lname" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="User_email">Email</label>
                    <input type="text" name="User_email" id="User_email" autocomplete="off" required>
                </div>

                <div class="field input">
                <label for="User_dob">Date of Birth:</label>
                 <input type="date" id="User_dob" name="User_dob" autocomplete="off" required>
               </div>
               <div class="field input">
               <label for="User_contactno">Phone Number:</label>
               <input type="tel" id="User_contactno" name="User_contactno" pattern="[0-9]{10}" autocomplete="off" required>
               </div>
               <div class="field input">
                    <label for="User_username">Username</label>
                    <input type="text" name="User_username" id="User_username" autocomplete="off" required>
                </div>
               <div class="field input">
                    <label for="User_pwd">Password</label>
                    <input type="password" name="User_pwd" id="User_pwd" autocomplete="off" required>
                </div>
                 <div class="field input">
                    <label for="User_type">User Type</label>
                    <input type="text" name="User_type" id="User_type" list="list" autocomplete="off" required>
                        <datalist id="list">
                            <option value="User">  
                            <option value="Admin">
                        </datalist>
                  
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="Login.php">Sign In</a>
                </div>
            </form>
        </div>
        
      </div>
    
</body>
</html>