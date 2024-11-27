<?php
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
?>
