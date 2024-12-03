<?php

// Database Connection Setting
$host = "localhost";
$dbname = "booking_system";
$username = "root";
$password = "";


// Attempt to Establish the Database COnnection
try {

 
    // Data Source Name (DSN) -Specifies  the Database Connection Details
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

    // PDO Options Array to Configure the Connection's Behavior
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Set error mode to throw exceptions for better error handling
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,  // Fetch results as associative arrays by default
        PDO::ATTR_EMULATE_PREPARES => false,  // Disable emulated prepared statements (use native prepared statements)
        PDO::ATTR_PERSISTENT => false,  // Disable persistent connections, creating a new connection for each request
        PDO::ATTR_TIMEOUT => 30,  // Set connection timeout to 30 seconds
    ];

    // Create a New PDO Instance with the DSN, Username, Password and Options
    $pdo = new PDO($dsn, $username, $password, $options);

    // $message = "Database Connected Successfully!";
    // $messageClass = "success";

    
   // Catch Any Errors (Exceptions) During the Connection Attempt
} catch (PDOException $e) {

    $message = "Connection Failed: " . $e->getMessage(); 
    $message = "error";

}

?>
