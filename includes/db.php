<?php
// Database connection settings
$host = "localhost";            // Database host (usually 'localhost' for local development)
$dbname = "booking_system";     // Name of the database you want to connect to
$username = "root";             // Database username (use a more secure username in production)
$password = "";                 // Database password (use a secure password for production)

// Attempt to establish the database connection
try {
    // Data Source Name (DSN) - Specifies the database connection details
    /**
     * DSN is the string used to connect to the database.
     * - mysql: the type of database (MySQL)
     * - host: the database server location (localhost)
     * - dbname: the name of the database you're connecting to (booking_system)
     * - charset=utf8: use the UTF-8 character set for proper encoding (important for special characters)
     */
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";  // UTF-8 encoding is set for better text handling

    // PDO options array to configure the connection's behavior
    /**
     * PDO::ATTR_ERRMODE: Enables exceptions for error handling (recommended for easier debugging).
     * PDO::ATTR_DEFAULT_FETCH_MODE: Default fetch mode is associative arrays (more readable).
     * PDO::ATTR_EMULATE_PREPARES: Disables emulated prepares, using native prepared statements (more secure).
     * PDO::ATTR_PERSISTENT: Persistent connections are disabled for security and performance reasons.
     * PDO::ATTR_TIMEOUT: Sets a timeout for the database connection (in seconds), prevents hanging connections.
     */
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,          // Enables exceptions for database errors
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,     // Fetches rows as associative arrays by default
        PDO::ATTR_EMULATE_PREPARES => false,                  // Disables emulated prepared statements (security)
        PDO::ATTR_PERSISTENT => false,                        // Disables persistent connections for better security
        PDO::ATTR_TIMEOUT => 30,                              // Sets a timeout of 30 seconds for the connection
    ];

    // Create a new PDO instance with the DSN, username, password, and options
    /**
     * PDO constructor creates the actual connection to the database.
     * - $dsn: contains database connection details (host, dbname, charset)
     * - $username and $password: credentials used to connect to the database
     * - $options: additional connection settings (error mode, fetch mode, etc.)
     */
    $pdo = new PDO($dsn, $username, $password, $options);

    // The connection is successfully established if we reach here (can use this $pdo object for database queries)
    // Optional: Log or display a message about the successful connection (can be omitted in production)
    // $message = "Database connected successfully";
    // $messageClass = "success"; 

} catch (PDOException $e) {
    // Catch any errors (exceptions) during the connection attempt
    /**
     * If the connection fails, an exception will be thrown.
     * - $e->getMessage(): Retrieves the specific error message.
     * - We store the error message and set the class for the message (used to style it).
     */
    $message = "Connection failed: " . $e->getMessage();  // Capture the error message
    $messageClass = "error";  // This can be used to style the message (e.g., for error indication)
}
?>
