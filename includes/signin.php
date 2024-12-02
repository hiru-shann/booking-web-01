<?php
// db.php - Database connection
require 'db.php';  // Assuming db.php contains your PDO connection

// Start a session to manage user login status
session_start();

// Initialize an array to store errors
$errors = [];

if (isset($_POST['user_name'], $_POST['password'])) {
    // Sanitize input to prevent XSS
    $userName = htmlspecialchars(trim($_POST['user_name']));
    $password = trim($_POST['password']);

    // Validate user input
    if (empty($userName)) {
        $errors[] = "Username is required.";
    }
    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    // If no errors, proceed to check the credentials
    if (count($errors) === 0) {
        try {
            // Check if the username exists in the database
            $sql = "SELECT id, user_name, password FROM users WHERE user_name = :user_name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':user_name', $userName);
            $stmt->execute();
            
            // Fetch user data if it exists
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($user) {
                // Check if the entered password matches the hashed password
                if (password_verify($password, $user['password'])) {
                    // Set session variables for the logged-in user
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_name'] = $user['user_name'];
                    
                    // Redirect to a dashboard or home page
                    header('Location: ../views/profile.php?signin=success');
                    exit;
                } else {
                    $errors[] = "Incorrect password.";
                }
            } else {
                $errors[] = "Username not found.";
            }
        } catch (PDOException $e) {
            // Handle database errors
            $errors[] = "Database error: " . $e->getMessage();
        }
    }
}

// Display errors if any
if (count($errors) > 0) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
}

?>
