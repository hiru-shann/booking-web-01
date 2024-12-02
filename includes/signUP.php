<?php
require "db.php";  // Assuming db.php contains your PDO connection

// Initialize an array to store errors
$errors = [];

// Validate and sanitize input to prevent issues
if (isset($_POST['first_name'], $_POST['last_name'], $_POST['user_name'], $_POST['address'], $_POST['phone_number'], $_POST['email'], $_POST['password'])) {
    $fName = htmlspecialchars(trim($_POST['first_name']));
    $lName = htmlspecialchars(trim($_POST['last_name']));
    $uName = htmlspecialchars(trim($_POST['user_name']));
    $address = htmlspecialchars(trim($_POST['address']));
    $pNumber = htmlspecialchars(trim($_POST['phone_number']));
    $email = htmlspecialchars(trim($_POST['email']));
    $pass = trim($_POST['password']);
    $repeatPass = trim($_POST['r_password']);




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


       // Additional validation for email
    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }

    // Validate phone number format
    if (!empty($pNumber) && !preg_match('/^[0-9+\- ]*$/', $pNumber)) {
        $errors[] = "Invalid phone number.";
    }

    // Validate password length (at least 8 characters)
    if (strlen($pass) < 8) {
        $errors[] = "Password must be at least 8 characters.";
    }



} else {
    echo "Please fill in all the fields.";
}


// Check if the email already exists in the database
if (count($errors) == 0) {
    try {

        $sql = "SELECT COUNT(*) FROM users WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $emailExists = $stmt->fetchColumn();
        
        if ($emailExists > 0) {
            $errors[] = "Email is already taken.";
        }

        // If there are any validation errors, display them
        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo $error . "<br>";
            }

        } else {

                // Hash the password for security
                $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

                // Use a prepared statement to insert the data securely
                $sql = "INSERT INTO users (first_name, last_name, user_name, address, phone, email, password) VALUES (:first_name, :last_name, :user_name, :address, :phone, :email, :password)";
            
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
                    exit;

                } else {
                    echo "Error occurred: Unable to register user.";
                
                }

            }
                
        } catch (PDOException $e) {
            // Handle the exception if something goes wrong with the database query
            echo "Database error: " . $e->getMessage();
        }
    
}

?>
