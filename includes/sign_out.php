<?php
// Include the session management file
require 'session.php';  // This ensures that session-related functions are available

// Start the session to access session data
// session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Optionally: Delete session cookie (in case of client-side session persistence)
setcookie(session_name(), '', time() - 3600, '/');  // Expire the session cookie by setting the time in the past

// Redirect the user to the login page or home page
header("Location: ../views/index.php?logged_out=true");
exit;
?>
