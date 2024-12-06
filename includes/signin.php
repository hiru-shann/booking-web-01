<?php
// Include the database connection file

require 'session.php';  // For session management

  // Start the session

// Initialize an array to store error messages
$errors = [];

// Check if the form is submitted and required fields are set
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_name'], $_POST['password'])) {
    // Sanitize and validate the user input
    $userName = filter_var(trim($_POST['user_name']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);  // Sanitize username safely
    $password = trim($_POST['password']);  // Directly trim password

    // Optionally limit the size of the user name input (for example, to 50 characters)
    $userName = substr($userName, 0, 50);  // Truncate to 50 characters if needed

    // Basic validation
    if (empty($userName)) {
        $errors[] = "Username is required.";
    }
    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    // If no errors, proceed to authenticate the user
    if (count($errors) === 0) {
        try {
            // Prepare the SQL query to get the user data from the database
            $sql = "SELECT id, user_name, password FROM users WHERE user_name = :user_name LIMIT 1";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':user_name', $userName, PDO::PARAM_STR);  // Bind the username parameter
            $stmt->execute();

            // Fetch the user record
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Check if user exists and verify the password
            if ($user && password_verify($password, $user['password'])) {
                // Regenerate session ID to prevent session fixation attacks
                session_regenerate_id(true);

                // Store user information in session variables
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['user_name'];

                // Redirect to the user dashboard or home page
                header('Location: ../views/profile.php?signin=success');
                exit;
            } else {
                $errors[] = "Incorrect username or password.";
            }
        } catch (PDOException $e) {
            // Handle database errors securely
            $errors[] = "Database error: " . htmlspecialchars($e->getMessage());
        }
    }
}

// Display errors if there are any
if (count($errors) > 0) {
    foreach ($errors as $error) {
        echo "<div class='error'>" . htmlspecialchars($error) . "</div>";  // Sanitize the error output
    }
}
?>
