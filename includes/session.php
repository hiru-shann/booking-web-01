<?php

require "db.php";

// Set session cookie parameters for added security before starting the session
function secureSession() {
    // Set session cookie parameters for added security (before session_start())
    session_set_cookie_params([
        'lifetime' => 0,  // Session expires when the browser closes
        'path' => '/',
        'domain' => 'localhost',  // Adjust for your domain
        'secure' => true,  // Ensure cookies are sent over HTTPS only
        'httponly' => true,  // Makes cookies inaccessible via JavaScript
        'samesite' => 'Strict',  // Helps mitigate CSRF attacks
    ]);
    
    // Regenerate session ID to prevent session fixation attacks after session_start()
    session_start();  // This should now be called inside the function after setting the cookie parameters
    session_regenerate_id(true); // Regenerate the session ID to prevent session fixation attacks
}

// Call the secure session function before starting the session
secureSession();



// Ensure the session is being used securely
if (!isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {
    // Redirect to the login page if the session does not exist or is invalid
    header("Location: popup.php");
    exit;
} else {
    // User is logged in, continue with the session
   
}

// Optional: Implement session timeout logic (for idle sessions)
$timeout_duration = 3600; // 1 hour
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout_duration) {
    session_unset();  // Unset all session variables
    session_destroy();  // Destroy the session
    header("Location: popup.php?session_timeout=true");
    exit;
}
$_SESSION['last_activity'] = time();  // Update last activity time
?>
