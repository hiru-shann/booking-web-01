// Database Connection Comment 


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

//sign up code



require 'db.php';

if(isset($_POST['submit'])){
    // Ensure data from the form is captured via POST request
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    try {
        // Establish PDO connection
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Use prepared statements to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, user_name, email, password, phone, address) 
                                VALUES (:first_name, :last_name, :user_name, :email, :password, :phone, :address)");

        // Bind parameters to the prepared statement
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':user_name', $user_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password); // Consider hashing the password before storing it
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':address', $address);

        // Execute the prepared statement
        $stmt->execute();

        echo "New record created successfully";

    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}



// Session convert_uudecode



session_start();

// Display success or error message from session if available
if (isset($_SESSION['success'])) {
    echo "<div class='alert alert-success'>" . $_SESSION['success'] . "</div>";
    unset($_SESSION['success']);
}

if (isset($_SESSION['error'])) {
    echo "<div class='alert alert-danger'>" . $_SESSION['error'] . "</div>";
    unset($_SESSION['error']);
}



// signup 



// Include database connection file
require_once 'db.php';

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Check if all required fields are set
    if (isset($_POST['first_name'], $_POST['last_name'], $_POST['user_name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['password'], $_POST['repeat_password'])) {
        
        // Sanitize and get form data
        $first_name = htmlspecialchars(trim($_POST['first_name']));
        $last_name = htmlspecialchars(trim($_POST['last_name']));
        $user_name = htmlspecialchars(trim($_POST['user_name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $phone = htmlspecialchars(trim($_POST['phone']));
        $address = htmlspecialchars(trim($_POST['address']));
        $password = htmlspecialchars(trim($_POST['password']));
        $repeat_password = htmlspecialchars(trim($_POST['repeat_password']));

        // Validate passwords match
        if ($password !== $repeat_password) {
            echo "Passwords do not match!";
            exit();
        }

        // Hash the password for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Check for duplicate user_name or email
        try {
            // Prepare SQL query to check if the username or email already exists
            $stmt = $pdo->prepare("SELECT * FROM users WHERE user_name = :user_name OR email = :email");
            $stmt->execute(['user_name' => $user_name, 'email' => $email]);
            $user = $stmt->fetch();

            if ($user) {
                echo "Username or Email already taken!";
                exit();
            }

            // If everything is okay, insert data into the database
            $sql = "INSERT INTO users (first_name, last_name, user_name, email, password, phone, address) 
                    VALUES (:first_name, :last_name, :user_name, :email, :password, :phone, :address)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':first_name' => $first_name,
                ':last_name' => $last_name,
                ':user_name' => $user_name,
                ':email' => $email,
                ':password' => $hashed_password,
                ':phone' => $phone,
                ':address' => $address
            ]);

            echo "New user created successfully!";
            header("Location: signIn.php"); // Redirect to login page after successful registration
            exit(); // Make sure to exit after redirection

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Please fill in all fields!";
    }
}








require "db.php";  // Assuming db.php contains your PDO connection

// Function to generate a CSRF token and store it in the session
function generateCsrfToken() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

// Validate CSRF token
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['csrf_token'])) {
    if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die("CSRF token validation failed.");
    }
}

// Validate and sanitize input to prevent issues
$errors = []; // Array to hold error messages

// Check if all required fields are set
if (!isset($_POST['first_name'], $_POST['last_name'], $_POST['user_name'], $_POST['address'], $_POST['phone_number'], $_POST['email'], $_POST['password'], $_POST['repeat_password'])) {
    $errors[] = "Please fill in all the fields.";
} else {
    $fName = htmlspecialchars(trim($_POST['first_name']));
    $lName = htmlspecialchars(trim($_POST['last_name']));
    $uName = htmlspecialchars(trim($_POST['user_name']));
    $address = htmlspecialchars(trim($_POST['address']));
    $pNumber = htmlspecialchars(trim($_POST['phone_number']));
    $email = htmlspecialchars(trim($_POST['email']));
    $pass = trim($_POST['password']);  // Trim password to remove leading/trailing spaces, but not special characters
    $repeatPass = trim($_POST['repeat_password']);  // Trim repeat password

    // Validate each field
    if (empty($fName)) {
        $errors[] = "First name is required.";
    }
    if (empty($lName)) {
        $errors[] = "Last name is required.";
    }
    if (empty($uName)) {
        $errors[] = "Username is required.";
    }
    if (empty($address)) {
        $errors[] = "Address is required.";
    }
    if (empty($pNumber)) {
        $errors[] = "Phone number is required.";
    }
    if (empty($email)) {
        $errors[] = "Email is required.";
    }
    if (empty($pass)) {
        $errors[] = "Password is required.";
    }
    if (empty($repeatPass)) {
        $errors[] = "Repeat password is required.";
    }

    // Check if passwords match
    if ($pass !== $repeatPass) {
        $errors[] = "Passwords do not match.";
    }

    // Additional input validation
    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }

    // Phone number validation (e.g., allow numbers and dashes, or use a regex for a specific format)
    if (!empty($pNumber) && !preg_match('/^[0-9+\- ]*$/', $pNumber)) {
        $errors[] = "Invalid phone number.";
    }

    // Password length validation (minimum length of 8 characters)
    if (!empty($pass) && strlen($pass) < 8) {
        $errors[] = "Password must be at least 8 characters.";
    }
}

if (count($errors) > 0) {
    // Display all errors
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
} else {
    // Hash the password for security using PASSWORD_DEFAULT
    $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

    // Use a prepared statement to insert the data securely
    $sql = "INSERT INTO users (first_name, last_name, user_name, address, phone, email, password) 
            VALUES (:first_name, :last_name, :user_name, :address, :phone, :email, :password)";

    $stmt = $pdo->prepare($sql);

    // Bind the parameters to prevent SQL injection
    $stmt->bindParam(':first_name', $fName);
    $stmt->bindParam(':last_name', $lName);
    $stmt->bindParam(':user_name', $uName);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':phone', $pNumber);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashedPass);

    // Execute the query and check if it was successful
    if ($stmt->execute()) {
        echo "User successfully registered.";
    } else {
        // Log the error instead of showing it to the user
        error_log("Error occurred: " . implode(", ", $stmt->errorInfo()));
        echo "Error occurred. Please try again later.";
    }
}


<!-- CSRF Token Form Input -->
<!-- <form method="POST">
    <input type="hidden" name="csrf_token" value="<?php echo generateCsrfToken(); ?>" /> -->
    <!-- Other form fields here -->
    <!-- <label for="password">Password</label>
    <input type="password" name="password" required><br>
    
    <label for="repeat_password">Repeat Password</label>
    <input type="password" name="repeat_password" required><br> -->
    
    <!-- Other fields for first_name, last_name, user_name, etc. -->
    <!-- <input type="submit" value="Register">
</form> -->





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
            $user = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            
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

