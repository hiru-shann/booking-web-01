<?php
// Start the session to access session variables
session_start();

// Secure session: regenerate session ID to prevent session fixation attacks
if (!isset($_SESSION['session_regenerated'])) {
    session_regenerate_id(true);
    $_SESSION['session_regenerated'] = true;
}

// Check if the user is logged in by verifying session variables
if (!isset($_SESSION['user_id'])) {
    // If not logged in, redirect to the sign-in page
    header('Location: signIn.php');
    exit;
}
?>
