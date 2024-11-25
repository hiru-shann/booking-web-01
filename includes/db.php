<?php

$host = "localhost";
$dbname ="booking_system";
$username ="root";
$password ="";


try{
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $options = [
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    $pdo = new PDO($dsn, $username, $password, $options);

    // $message = "Database connected succesfully";
    // $messageClass = "success"; 

   
} catch (PDOException $e){
    
    $message = "Connection failed: " . $e->getMessage();
    $messageClass = "error"; 

}

?>